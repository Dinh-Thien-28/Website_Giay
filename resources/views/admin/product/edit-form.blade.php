@extends('admin.layouts.main')
@section('title','Sửa Sản Phẩm')
@section('content')
@if(session('msg')!= "")
    <p class="text-danger">{{session('msg')}}</p>
    
@endif
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="{{$model->name}}">
                    @error('name')
                    <span class="text-danger">{{$message}}  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" id="" class="form-control">
                        @foreach ($cates as $c)
                            <option @if($c->id == old('cate_id')) selected @endif value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Số lượng tổng</label>
                    <input type="text" name="quantity" class="form-control" value="{{old('quantity',$model->quantity)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Giá gốc</label>
                    <input type="text" name="price" class="form-control" value="{{$model->price}}">
                </div>
                <div class="form-group">
                    <label for="">Giá khuyến mại</label>
                    <input type="text" name="sale_price" class="form-control" value="{{$model->sale_price}}">
                </div>
               
                {{-- <div class="form-group">
                    <label for="">Tình Trạng</label>
                    <select name="status" id="" class="form-control">
                        @foreach ($status as $s)
                            <option @if($s == 1)
                                value="Còn Hàng"
                                selected @endif value="{{Hết hang}}">{{$c->name}}
                            </option>
                           
                            <select name="category_id" class="mt-3 form-control">
                                @foreach ($lstCate as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $data->category_id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        @endforeach
                    </select>
                </div> --}}
            </div>
            <div class="form-group">
                <label for="">ảnh</label>
                <input type="file" name="file_upload" class="form-control">
                @error('file_upload')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea class="form-control" rows="3" name="short_desc">{{$model->short_desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea class="form-control" rows="5" name="pro_desc">{{$model->pro_desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Chi tiết thông số</label>
                    <textarea class="form-control" rows="5" name="specification">{{$model->specification}}</textarea>
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
