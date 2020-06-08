<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product(){
      return view('/admin.add_category_product');
    }
    public function all_category_product(){
        $all_category_product=DB::table('category_product')->get();
        $Manage_category_product=view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_category_product',$Manage_category_product);
    }
    public function save_category_product(Request $request){
        $data=array();
        $data['category_name']=$request->category_product_name;
        $data['category_desc']=$request->category_product_desc;
        $data['category_status']=$request->category_product_status;
        if($data){
        DB::table('category_product')->insert($data);
        Session::put('message','Thêm Thành Công');
        return Redirect::to('/add-category-product');
        }
        else{
            Session::put('message','Thêm Thất Bại');
            return Redirect::to('/add-categoryproduct');
        }

    }
    public function unactive_category_product($category_product_id){
        DB::table('category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Hiển thị danh mục');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id){
        DB::table('category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Ẩn danh mục');
        return Redirect::to('all-category-product');

    }
    public function edit_category_product($category_product_id){
        $edit_category_product=DB::table('category_product')->where('category_id',$category_product_id)->get();
        $Manage_category_product=view('admin.update_category_product')
        ->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('admin.update_category_product',$Manage_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $data=array();
        $data['category_name']=$request->category_product_name;
        $data['category_desc']=$request->category_product_desc;
        if($data){
            DB::table('category_product')->where('category_id',$category_product_id)->update($data);
            Session::put('message','Cập Nhật Thành Công');
            return Redirect::to('/all-category-product');
            }
            else{
                Session::put('message','Cập Nhật Thất Bại Thất Bại');
                return Redirect::to('/all-categoryproduct');
            }
    }
    public function delete_category_product($category_product_id){
        $product_category=DB::table('tbl_product')->get();
        $category_qty=0;
        foreach($product_category as $key => $value){
            if($value->category_id==$category_product_id){
                $category_qty++;
            }
        }
        if($category_qty!=0){
            Session::put('message','có '.$category_qty.'sản phẩm chứa danh mục này' );
            return Redirect::to('/all-category-product');
        }else{
            DB::table('category_product')->where('category_id',$category_product_id)->delete();

            Session::put('message','Xóa Thành Công');
            return Redirect::to('/all-category-product');
        }
       
    }

    //home
    public function show_category_home($category_product_id){
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();

        $category_by_id=DB::table('tbl_product')->join('category_product','tbl_product.category_id','='
        ,'category_product.category_id')->where('tbl_product.category_id',$category_product_id)->get();
        
        return view('pages.Category.show_category')->with('category_product',$cate)->with('brand_product',$brand)->with('category_by_id',$category_by_id);
    }
}
