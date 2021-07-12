<?php
   $genderList = [
       [
           'id' =>1,
           "name"=> "Nam"
       ],
       [
        'id' =>2,
        "name"=> "Nữ"
    ],
    [
        'id' =>3,
        "name"=> "Khác"
    ],
   ]
?>

<form action="{{route('save.info')}}" method="get">
    <div>
        <label for="">Họ Và Tên:</label>
        <input type="text" name="name" >
    </div>
    <div>
        <label for="">Tuổi:</label>
        <input type="text" name="age" >
    </div>
    <div>
        <label for="">Giới Tính:</label>
       @foreach
        <input name="gioitinh" type="gender" value="{{$item['id]}}" />Nữ
          @if($loop->index==0)
      @endforeach
    </div>
    <div>
        <label for="">Tình Trạng Hôn Nhân:</label>
        <input name="honnhan" type="checkbox" value="1" />
  
        <input name="honnhan" type="checkbox" value="null " />
        <label for="honnhan">Chưa Kết Hôn</label>
    </div>
    <div>
        <button type="submit"  >Lưu</button>
    </div>
</form>