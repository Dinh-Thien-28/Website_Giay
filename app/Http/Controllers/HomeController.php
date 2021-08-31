<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $pagesize = config('common.default_page_size');
        // nhận dữ liệu từ form gửi lên & thực hiện filter
        $productQuery = Product::where('name', 'like', "%".$request->keyword."%");

        if($request->has('cate_id') && $request->cate_id > 0){
            $productQuery->where('cate_id', $request->cate_id);
        }

        if($request->has('order_by') && $request->order_by > 0){
            if($request->order_by == 1){
                $productQuery->orderBy('name');
            }else if($request->order_by == 2){
                $productQuery->orderByDesc('name');
            }else if($request->order_by == 3){
                $productQuery->orderBy('price');
            }else if($request->order_by == 4){
                $productQuery->orderByDesc('price');
            }else if($request->order_by == 5){
                $productQuery->orderBy('quantity');
            }else{
                $productQuery->orderByDesc('quantity');
            }
        }
        // 1. dựa vào model Product lấy toàn bộ data trong db

        $products = $productQuery->paginate($pagesize);
        $products->appends($request->except('page'));

        return view('index',['products'=>$products]);
    }
    public function category($id){

        $cate = Category::where('id',$id)->first();
        $products = Product::where('cate_id',$cate->id)->get();
        return view('layout.category',compact('products'));
    }
    public function product_detail($id){
        $products = Product::all();

        return view('layout.single',compact('products'));
    }

}
?>
