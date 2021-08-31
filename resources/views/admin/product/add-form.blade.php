@extends('admin.layouts.main')
@section('title','Trang Thêm Mới')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hãng</label>
                    <select name="cate_id" id="" class="form-control">
                        <@foreach($cates as $c)
                        <option @if($c->id == old('cate_id'))  selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Số lượng </label>
                    <input type="text" name="quantity" class="form-control" value="{{old('quantity')}}">
                    @error('quantity')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="file_upload" multiple class="form-control" value="{{old('file_upload')}}">
                    @error('file_upload')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Giá gốc</label>
                    <input type="text" name="price" class="form-control" value="{{old('price')}}">
                    @error('price')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Giá khuyến mại</label>
                    <input type="text" name="sale_price" class="form-control" value="{{old('sale_price')}}" >
                    @error('sale_price')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea class="form-control" rows="3" name="short_desc" >{{old('short_desc')}}</textarea>
                    @error('short_desc')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea class="form-control" rows="5" name="pro_desc" >{{old('pro_desc')}}</textarea>
                    @error('pro_desc')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Chi tiết thông số</label>

                    <textarea class="form-control" rows="5" name="specification" >{{old('specification')}}</textarea>
                    @error('specification')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="text-right">
                    <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>

@endsection
