@extends('admin.layouts.main')
@section('title','Trang Thêm Danh Mục')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên Hãng</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Ảnh Thương Hiệu</label>
                    <input type="file" name="file_upload" multiple class="form-control" value="{{old('file_upload')}}">
                    @error('file_upload')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tên Thương hiệu</label>
                    <input type="text" name="trademarks" class="form-control" value="{{ old('name') }}">
                    @error('trademarks')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="text-right">
                    <a href="{{route('category.index')}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>

@endsection
