<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        Session::put('successorder', 'Đăng nhập Thành Công');
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);

        $result= DB::table('tbl_admin')
        ->where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
           
            return Redirect::to('/dashboard');
        }else{
            Session::put('successorder', 'Password hoặc Email bị sai !! Vui lòng nhập lại');
            Session::put('message','Password hoặc Email bị sai !! Vui lòng nhập lại');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
