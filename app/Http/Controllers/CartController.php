<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function add_cart($product_id){
        $product_buy=DB::table('tbl_product')->where('product_id',$product_id)->first();
        Cart::add(array('id'=>$product_id,'name'=>$product_buy->product_name,'price'=>$product_buy->product_gia
        ,'qty'=>1,'options'=>array('img'=>$product_buy->product_image)));
        $content=Cart::content();
        // echo "<pre>";
        // print_r($content);
        return redirect()->route('giohang');
    }
    public function add_qty_cart($rowId){
        $content=Cart::content();
        $qty_plus=$content[$rowId]->qty;
        // echo "<pre>";
        // print_r($content);
        Cart::update($rowId,['qty'=>$qty_plus+1]);
        return redirect()->route('giohang');
    }
    public function down_qty_cart($rowId){
        $content=Cart::content();
        $qty_plus=$content[$rowId]->qty;
        // echo "<pre>";
        // print_r($content);
        Cart::update($rowId,['qty'=>$qty_plus-1]);
        return redirect()->route('giohang');
    }
    public function delete_cart($rowId){
        Cart::remove($rowId);
        return redirect()->route('giohang');
    }
    public function address(Request $request){
        $address_id=$request->address;
        $data=array();
        $data['address_desc']=$address_id;
        if($data){
             DB::table('tbl_address')->update($data);
        }
        return redirect()->route('giohang');
    }
    public function district(Request $request){
        $district_id=$request->slt_dis;
        $data=array();
        $data['district_desc']=$district_id;
        if($data){
             DB::table('tbl_district')->update($data);
        }
        return redirect()->route('giohang');
    }
    public function checkout(Request $request){
        $data=array();
        $data['id_oder']=0;
        $data['checkout_address']=$request->tp.' / '.$request->q.' / '.$request->dc;
        $data['checkout_desc']='';
        $a="qwertyuiopasdfghjklzxcvbnm";
        $n=8;
        $b=substr(str_shuffle ($a), 0, $n);
        $data['checkout_id_oder']=rand(0,99).$b;
        $data['email']=$request->email;
        $total=0;
        $content=Cart::content();
        foreach($content as $key => $value){
            $total+=$value->price*$value->qty;
        }
        $data['checkout_total']=$total;
        if($data){
            DB::table('tbl_checkout')->insert($data);

            return Redirect::to('/oder/'.$data['checkout_id_oder']);
        }
    }
    public function oder($checkout_id_oder){
        $checkout=DB::table('tbl_checkout')->get();
        $content=Cart::content();
        foreach($content as $k =>$v){
            $data=array();
            foreach($checkout as $key =>$value){
                if($value->checkout_id_oder==$checkout_id_oder){
                    $data['checkout_id']=$value->checkout_id;
                }
            }
            $data['oder_name']=$v->name;
            $data['oder_price']=$v->price;
            $data['order_qty']=$v->qty;
            if($data){
                DB::table('tbl_oder')->insert($data);
            }
        }
        $content=Cart::content();
        foreach($content as $key =>$value){
            Cart::remove($value->rowId);
        }
        Session::put('success', 'Đặt Thành Công');
        return Redirect::to('/gio-hang');
    }
    public function show_order(){
        $order=DB::table('tbl_oder')->get();
        $checkout=DB::table('tbl_checkout')->get();
        $desc=array();
        foreach($checkout as $key => $value){
            $desc[$value->checkout_id]='';
            foreach($order as $k  => $v){
                if($value->checkout_id==$v->checkout_id){
                    $info="Tên : ".$v->oder_name." Giá : ".$v->oder_price." Số lượng : ".$v->order_qty."\n";
                    $desc[$value->checkout_id]=$desc[$value->checkout_id]."\t".$info;
                }
            }
        }
        // echo "<pre>";
        // print_r($desc);
        $Manage_order=view('admin.all_oder')->with('desc',$desc)->with('checkout',$checkout);
        return view('admin_layout')->with('admin.all_oder',$Manage_order);
    }
    public function unactive_checkout($checkout_id){
        $request=DB::table('tbl_checkout')->where('checkout_id',$checkout_id)->get();
        $chitiet=DB::table('tbl_oder')->where('checkout_id',$checkout_id)->get();
        $datachitiet=array();
        
        $data=array(
            'diachi'=>$request[0]->checkout_address, //gan du lieu vs ten vao data
            'giatong'=>$request[0]->checkout_total,
            'email'=>$request[0]->email,
            'chitiet'=>$chitiet
        );
        // foreach($data['chitiet'] as $item){
        //     print_r($item->oder_name);
        // }
        // echo "<pre>";
        // print_r($data);
        Mail::to($request[0]->email)->send(new SendMail($data));
        DB::table('tbl_checkout')->where('checkout_id',$checkout_id)->update(['id_oder'=>1]);
        Session::put('message','Đã duyệt');
        return back()->with('success','Thank for contacting us!');
    }
    public function delete_checkout($checkout_id){
        DB::table('tbl_checkout')->where('checkout_id',$checkout_id)->delete();
        DB::table('tbl_oder')->where('checkout_id',$checkout_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all-order');
    }
    public function show_cart(){
        $address=DB::table('tbl_address')->get();
        $district=DB::table('tbl_district')->where('district_city',$address[0]->address_desc)->get();
        $content=Cart::content();
        
        return view('pages.Cart.shopping_cart')->with('content_cart',$content)->with('address',$address)
        ->with('district',$district);
    }
}
