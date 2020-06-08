<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;
use App\User;
use Auth;
use Validator;
use addMethod;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();

        $product=DB::table('tbl_product')->where('product_status','0')->orderby('product_id','asc')->get();

        return view('pages.home')->with('category_product',$cate)->with('brand_product',$brand)->with('all_product',$product);
    }
    public function getLogin(){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();
        return view('pages.dangnhap')->with('category_product',$cate)->with('brand_product',$brand);
    }
    
    public function getSignin(){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();
    
        return view('pages.dangki')->with('category_product',$cate)->with('brand_product',$brand);
    }

    public function postSignin(Request $request){
        $this->validate($request, //kiểm tra form
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20|alpha_num',
                'name'=>'required|',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Email không đúng định dạng! (ten_email@gmail.com)',
                'email.unique'=>'Email này đã được đăng ký!Vui lòng nhập Email khác !',
                'password.required'=>'Vui lòng nhập mật khẩu <3',
                're_password.same'=>'Mật khẩu không giống nhau :(',
                'password.min'=>'Mật khẩu ít nhất có 6 ký tự ',
                'password.max'=>'Mật khẩu quá 20 ký tự',
                'password.alpha_num'=>'du lieu phai la chuoi va so'
               
            
            ]);
        $user = new User(); //tạo 1 biến mới.
        $user->name = $request->name;//lấy thông tin để lưu vào
        $user->email=$request->email;
        $user->password= Hash::make($request->password);//mật khẩu sẽ được lưu vào database và mã hóa bằng
                                                        //hàm Hash có sẵn trong laravel thuật toán bcrypt
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoảng thành công');


    }
        // |unique:users,password

    public function postLogin(Request $request){
        $this->validate($request,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email nhập không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất có 6 kí tự',
            'password.max'=>'Mật khẩu không quá 20 kí tự',
           
            // 'password.unique'=>'Mật khẩu không đúng'
        ]);
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        // print_r($credentials);
        //request->email là email người dùng nhập
        if(Auth::attempt($credentials)){//kiểm tra để xuất thông báo
            return redirect()->back()->with('thanhcong','Đăng nhập thành công');
        }
        else{
            return redirect()->back()->with(['thanhcong','Đăng nhập không thành công']);
        }
    }
    public function postLogout(){
        Auth::logout();
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();
        $arr=array();
        return redirect()->route('trang-chu')->with('category_product',$cate)->with('brand_product',$brand);
    }
}
