<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class DetailController extends Controller
{
   public function index(Request $request){
    $pagesize = config('common.default_page_size');
    //1. dựa vào model Product lấy toàn bộ dât trong db
    $detailQuery = Product::where('name','like',"%".$request->keyword."%");
    if($request->has('id')&& $request->order_by>0){
        if($request->order_by==1){
            $detailQuery = $detailQuery->orderBy('name');
        }else{
          $detailQuery = $detailQuery->orderByDesc('name');
        }
      }
      $detail = Product::all();

      $detail = $detailQuery->paginate($pagesize);
      $detail->appends($request->except('page'));
          //2. sinh ra màn hình danh sach với dữ liệu đã lấy được
      return view('admin.detail.index',[
              'detail'=>$detail,

              ]);
   }
  


}
