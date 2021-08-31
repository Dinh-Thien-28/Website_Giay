@extends('admin.layouts.main')
@section('title','Trang Danh mục')
@section('content')
<fieldset>
    <form action="" method="get">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
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

        </div>
        <div class="">
            <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
        </div>
    </form>
</fieldset>


<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>STT</th>
            <th>Tên Hãng </th>
            <th>Ảnh Thương Hiệu</th>
            <th>Thương Hiệu</th>
            <th>Số Lượng Sản Phẩm</th>
            <th></th>
            <th>
                <a href="{{route('category.add')}}" class="btn btn-primary">Thêm mới</a>
            </th>
        </thead>
        <tbody>

            @foreach($category as $c)
            <tr>
            <td>{{(($category->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                <td>{{$c->name}}</td>
                <td>
                    <img src="{{asset('upload/' . $c->image)}} " width="80">
                </td>
                <td>{{$c->trademarks}}</td>
                <td>{{count($c->products)}}</td>
                <td>
                    <a href="{{route('category.edit',['id'=>$c->id])}}" class="btn btn-info">Sửa</a>
                </td>
                <td>
                    <a href="{{route('category.remove',['id'=>$c->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-6 offset-3 d-flex justify-content-center">
        {{$category->links()}}
    </div>
</div>
@endsection







