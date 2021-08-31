<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(request $request){
        $pagesize = config('common.default_page_size');
          //1. dựa vào model Product lấy toàn bộ dât trong db
          $cateQuery = Category::where('name','like',"%".$request->keyword."%");
          if($request->has('id')&& $request->order_by>0){
              if($request->order_by==1){
                  $cateQuery = $cateQuery->orderBy('name');
              }else{
                $cateQuery = $cateQuery->orderByDesc('name');
              }
            }
        $products = Product::all();
        $cates = Category::all();
        $cates->load('products');
        $cates = $cateQuery->paginate($pagesize);
        $cates->appends($request->except('page'));
        //2. sinh ra màn hình danh sach với dữ liệu đã lấy được
        return view('admin.category.index',[
            'product_data'=>$products,
            'category'=>$cates,
            ]);
        }

        public function remove( $id)
    {
        Product::where('cate_id', $id)->delete();
        Category::where('id', $id)->delete();
        return redirect()->back();
    }

        public function addForm(){
          $cates = Category::all();
          return view('admin.category.add-form',compact('cates'));

        }


        public function saveAdd(CategoryFormRequest $request){
          $model = new Category();
          $model->fill($request->all());

          if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('categorys', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
          $model->save();
          return redirect(route('category.index'));
         }
         public function editForm($id){
          $category = Category::find($id);
          if(!$category){
            return redirect()->back();
          }
          $cates = Category::all();
          return view('admin.category.edit-form',compact('category','cates'));

        }

        public function saveEdit($id, CategoryFormRequest $request){
          $model = Category::find($id);
          if(!$model){
            return redirect(route('category.index'));
          }
          $model->fill($request->all());
          if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('categorys', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
          $model->save();
          return redirect(route('category.index'));
        }
}
?>
