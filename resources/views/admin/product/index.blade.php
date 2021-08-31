@extends('admin.layouts.main')
@section('title','Trang Sản Phẩm')
@section('content')
<fieldset>
    <form action="" method="get">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tên sp:</label>
                    <input type="text" name="keyword" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Danh mục:</label>
                    <select name="cate_id" class="form-control">
                        <option value="">Tất cả</option>
                        @foreach($cates as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>    
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
            <div class="">  
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
            <th>Ảnh</th>
            <th>Hãng</th>
            <th>Giá</th>
            <th>Số lượng</th>

            <th>
                <a href="{{route('product.add')}}" class="btn btn-primary">Thêm mới</a>
            </th>
        </thead>
        <tbody>
            @foreach ($product_data  as $p)
                <tr>
                    <td>{{(($product_data ->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>    
                    <td><a href="{{route('detail.index')}}">{{$p->name}}</a> </td>
                    <td>
                        <img src="{{asset('upload/' . $p->image)}} " width="80">
                    </td>
                    <td>{{$p->category->name}}</td>
                    <td>
                        @if($p->sale_price > 0)
                        <del>${{$p->price}}</del> <b>${{$p->sale_price}}</b>
                        @else
                        ${{$p->price}}
                        @endif
                    </td>
                    <td>{{$p->quantity}}</td>
                    <td>{{$p->starts}}</td>
                  
                    <td>
                        <a href="{{route('product.edit', ['id' => $p->id])}}" class="btn btn-info">Sửa</a>
                        <a href="{{route('product.remove', ['id' => $p->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-6 offset-3 d-flex justify-content-center">
        {{$product_data ->links()}}
    </div>
</div>
@endsection
   


