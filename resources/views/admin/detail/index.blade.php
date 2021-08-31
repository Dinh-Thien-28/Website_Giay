@extends('admin.layouts.main')
@section('title','Trang Chi Tiết Sản Phẩm')
@section('content')
<fieldset>
    <form action="" method="get">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="keyword" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Sắp xếp theo</label>
                    <select name="order_by" class="form-control">
                        <option value="">Mặc định</option>
                        @foreach(config('common.product_order_by') as $k => $val)
                        <option value="{{$k}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
            </div>    
        </div>
    </form>
</fieldset>
</br>

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>STT</th>
            <th>Tên Sản phẩm</th>
            <th>Mô Tả Ngắn</th>
            <th>Mô Tả</th>
            <th>Chi Tiết Thông Số</th>
            <th>Tình Trạng</th>
        </thead>
        <tbody>
            @foreach ($detail  as $d)
                <tr>
                    <td>{{(($detail ->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>    
                    <td>{{$d->name}}</td>
                    <td>{{$d->short_desc}}</td>
                    <td>{{$d->pro_desc}}</td>
                    <td>{{$d->specification}}</td>
                    <td>{{$d->status}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-6 offset-3 d-flex justify-content-center">
        {{$detail ->links()}}
    </div>
</div>
@endsection
   


