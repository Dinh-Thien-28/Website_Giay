<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
  public function index(){
      //lấy toàn bộ dữ liệu trong bảng users gán cho biến $users
      $users = User::all();
      //hiển thị trong thư mục
      return view('users.index',compact('users'));
  }

  public function infoForm(){
    return view('users.info_form');
  }
  public function saveInfo(Request $request){
   $name = $request->name;
   $age = $request->age;
   $gender = "";
   if($request->gender == 1){
     $gender = "Nam";
   }elseif($request->gender == 2){
     $gender = "Nữ";
   }else {
    $gender = "khác";
   }
   $isMaried=$request->has('isMaried') ? "Đã lập gia đình": "Độc thân";
    return view('users./.show-info', compact('name','age','gender','isMaried') );
  }
}
