<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();
class ProductController extends Controller
{
    public function add_product()
    {
        $cate=DB::table('category_product')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->orderby('brand_id','asc')->get();
        
        // $arr=array();
        
        // foreach($cate as $item){
        //     $arr[$item->category_id]=0;
        //     foreach($brand as $value)
        //     {
        //         if($value->category_id==$item->category_id){
        //             $arr[$item->category_id]++;
        //         }
        //     }
        // }
        return view('admin.add_product')->with('cate_product',$cate)->with('brand_product',$brand);
    }
    public function all_product()
    {
        $all_product = DB::table('tbl_product')
        ->join('category_product','category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id','desc')
        ->get();
        $Manage_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $Manage_product);
    }
    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_status'] = $request->product_status;
        $data['product_gia'] = $request->product_price;
        $data['category_id'] = $request->category_product;
        $data['brand_id'] = $request->brand_product; 

        $get_image=$request->file('product_image');
        $arrImg = array("png", "jpg", "bmp");
        if($get_image){
            $type = $get_image->getClientOriginalExtension();
            if (!in_array($type, $arrImg)){
                $mess="Không phải file hình <br>";
                Session::put('message',$mess );
                return Redirect::to('add-product');
            }
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            
            $new_name=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/Upload/product',$new_name);
            $data['product_image']=$new_name;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm Thành Công');
            return Redirect::to('add-product');
        }
        $data['product-image']='';
        if ($data) {
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm Thành Công');
            return Redirect::to('/add-product');
        } else {
            Session::put('message', 'Thêm Thất Bại');
            return Redirect::to('/add-product');
        }
    }
    public function unactive_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        Session::put('message', 'Hiển thị danh mục');
        return Redirect::to('all-product');
    }
    public function active_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        Session::put('message', 'Ẩn danh mục');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id)
    {
        $cate=DB::table('category_product')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->orderby('brand_id','asc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $Manage_product = view('admin.update_product')
            ->with('edit_product', $edit_product)->with('cate_product',$cate)->with('brand_product',$brand);
        return view('admin_layout')->with('admin.update_product', $Manage_product);
    }
    public function update_product(Request $request, $product_id)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_gia'] = $request->product_price;
        $data['category_id'] = $request->category_product;
        $data['brand_id'] = $request->brand_product; 

        $get_image=$request->file('product_image');
        if($get_image){
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_name=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/Upload/product',$new_name);
            $data['product_image']=$new_name;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm Thành Công');
            return Redirect::to('add-product');
        }
        if ($data) {
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message', 'Cập Nhật Thành Công');
            return Redirect::to('/all-product');
        } else {
            Session::put('message', 'Cập Nhật Thất Bại Thất Bại');
            return Redirect::to('/all-brandproduct');
        }
    }
    public function delete_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa Thành Công');
        return Redirect::to('/all-product');
    }
    //detail home
    public function detail_product($product_id){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();
        $product=DB::table('tbl_product')
        ->join('category_product','category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->where('tbl_product.product_id',$product_id)->get();
        return view('pages.Details.product_detail')->with('category_product',$cate)
        ->with('brand_product',$brand)->with('all_product',$product);
    }
    //
}
