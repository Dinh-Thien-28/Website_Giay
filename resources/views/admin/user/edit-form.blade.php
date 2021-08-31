@extends('admin.layouts.main')
@section('title','Trang Sửa User')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên User</label>
                    <input type="text" name="name" class="form-control" value="{{$model->name}}">
                </div>
              
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{$model->email}}" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="{{$model->password}}">
                </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="file_upload" class="form-control">
                    @error('file_upload')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Quyền</label>
                    <input type="text" name="is_name" class="form-control">
                    @error('is_name')

                        <span class="text-danger">{{$message}}</span>
                        
                    @enderror
                </div>
                <div class="text-right">
                    <a href="{{route('user.index')}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
@endsection