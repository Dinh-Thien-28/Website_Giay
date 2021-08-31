<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $pagesize = config('common.default_page_size');
        //1. dựa vào model Product lấy toàn bộ dât trong db
        $userQuery = User::where('name','like',"%".$request->keyword."%");
        if($request->has('id')&& $request->order_by>0){
            if($request->order_by==1){
                $userQuery = $userQuery->orderBy('name');
            }else{
              $userQuery = $userQuery->orderByDesc('name');
            }
          }

      $user = User::all();
      $user = $userQuery->paginate($pagesize);
      $user->appends($request->except('page'));
      //2. sinh ra màn hình danh sach với dữ liệu đã lấy được
      return view('admin.user.index',compact ('user'));

    }

    public function remove($id){
        User::destroy($id);
        return redirect()->back();
    }
    public function addForm(){
        $user = User::all();
        return view('admin.user.add-form', compact('user'));
    }
    public function saveAdd(UserFormRequest $request){
        $model = new User();
        // gán gtri cho các thuộc tính của object sử dụng massassign ($fillable trong model)
        $model->fill($request->all());

        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('users', $newFileName);
            $model->avatar = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('user.index'));

    }

    public function editForm($id){
        $model = User::find($id);
        if(!$model){
            return redirect()->back();
        }
        return view('admin.user.edit-form', compact('model'));
    }

    public function saveEdit($id, UserFormRequest $request){
        $model = User::find($id);
        if(!$model){
            return redirect(route('user.index'));
        }
        $model->fill($request->all());
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('users', $newFileName);
            $model->avatar = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('user.index'));
    }


}
