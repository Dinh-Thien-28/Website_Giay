@extends('admin.layouts.main')
@section('title','Trang Sản Phẩm')
@section('content')
<fieldset>
    <form action="" method="get">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tên User</label>
                    <input type="text" name="keyword" class="form-control">
                </div>
            </div>

        </div>
        <div class="">
            <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
        </div>
    </form>
</fieldset>
</br>

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>STT</th>
            <th>Tên User</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Quyền Truy Cập</th>
            <th>
                <a href="{{route('user.add')}}" class="btn btn-primary">Thêm mới</a>
            </th>
        </thead>
        <tbody>
            @foreach ($user  as $u)
                <tr>
                    <td>{{(($user ->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                    <td>{{$u->name}} </td>
                    <td>{{$u->email}}</td>
                    <td>
                        <img src="{{asset('upload/' . $u->avatar)}} " width="80">
                    </td>
                    <td>{{$u->is_name}}</td>

                    <td>
                        <a href="{{route('user.edit', ['id' => $u->id])}}" class="btn btn-info">Sửa</a>
                        <a href="{{route('user.remove', ['id' => $u->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-6 offset-3 d-flex justify-content-center">
        {{$user ->links()}}
    </div>
</div>
@endsection



