<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();
class BrandProduct extends Controller
{
    public function add_brand_product()
    {
        return view('/admin.add_brand_product');
    }
    public function all_brand_product()
    {
        $all_brand_product = DB::table('tbl_brand')->get();
        $Manage_brand_product = view('admin.all_brand_product')->with('all_brand_product', $all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product', $Manage_brand_product);
    }
    public function save_brand_product(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;
        if ($data) {
            DB::table('tbl_brand')->insert($data);
            Session::put('message', 'Thêm Thành Công');
            return Redirect::to('/add-brand-product');
        } else {
            Session::put('message', 'Thêm Thất Bại');
            return Redirect::to('/add-brandproduct');
        }
    }
    public function unactive_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 1]);
        Session::put('message', 'Hiển thị danh mục');
        return Redirect::to('all-brand-product');
    }
    public function active_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 0]);
        Session::put('message', 'Ẩn danh mục');
        return Redirect::to('all-brand-product');
    }
    public function edit_brand_product($brand_product_id)
    {
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        $Manage_brand_product = view('admin.update_brand_product')
            ->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.update_brand_product', $Manage_brand_product);
    }
    public function update_brand_product(Request $request, $brand_product_id)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        if ($data) {
            DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
            Session::put('message', 'Cập Nhật Thành Công');
            return Redirect::to('/all-brand-product');
        } else {
            Session::put('message', 'Cập Nhật Thất Bại Thất Bại');
            return Redirect::to('/all-brandproduct');
        }
    }
    public function delete_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message', 'Xóa Thành Công');
        return Redirect::to('/all-brand-product');
    }
    
    //home
    public function show_brand_home($brand_product_id){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();

        $brand_by_id=DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','='
        ,'tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_product_id)->get();

        return view('pages.Category.show_category')->with('category_product',$cate)->with('brand_product',$brand)->with('category_by_id',$brand_by_id);
    }
}
