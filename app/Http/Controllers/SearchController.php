<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
class SearchController extends Controller
{
    public function index(){
        echo "aa";
    }
    public function search_product(Request $request){
        $data=$request->search_key;
        $search=DB::table('tbl_product')->where('product_name','like', '%'.$data.'%')
        ->orWhere('product_gia','like', $data)
        ->get();
        $cate=DB::table('category_product')->where('category_status','0')->orderby('category_id','asc')->get();
        $brand=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','asc')->get();
        return view('SearchProduct.Search')->with('category_product',$cate)->with('brand_product',$brand)->with('search_product',$search);
    }
}
