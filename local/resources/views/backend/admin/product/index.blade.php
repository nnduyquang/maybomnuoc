@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div id="product">
        <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col-md-8">
                    <h2>Quản Lý Sản Phẩm</h2>
                </div>
                <div class="col-md-4 text-right">
                    @permission(('product-create'))
                    <a class="btn btn-success" href="{{ route('product.create') }}"> Tạo Mới Sản Phẩm</a>
                    @endpermission
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        {!! Form::open(array('route' => 'product.search','method'=>'POST','id'=>'formSearchProduct')) !!}
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::submit('Tìm Kiếm', ['class' => 'btn btn-info']) !!}
                </div>

            </div>
        </div>
        {!! Form::close() !!}
        @if(!empty($keywords))
            <div id="showKeySearch" class="col-md-12">
                <div class="wrap-search">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a
                            href="{{ route('product.search') }}">X</a>
                </div>
            </div>
            {{ Form::hidden('hdKeyword', $keywords) }}
        @endif
        <div id="ulti-bar" class="col-md-12">
            <div class="row">
                <div class="col-md-2 v-divider-right">
                    @permission(('product-create'))
                    <a class="btn btn-success" href="{{ route('product.create') }}"> + Sản Phẩm</a>
                    @endpermission
                </div>
                <div class="ulti-edit" class="col-md-2">
                    <ul class="ulti-head">
                        <li><a href="">Chỉnh Sửa</a>
                            <ul class="ulti-head-dropdown">
                                <li><a class="ulti-copy" href="#">Sao Chép</a></li>
                                {!! Form::open(array('route' => 'product.paste','method'=>'POST','id'=>'formPaste')) !!}
                                {{ Form::hidden('listID') }}
                                <li><a class="ulti-paste" href="#">Dán</a></li>
                                {!! Form::close() !!}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>TT</th>
                    <th></th>
                    <th>Tên Bất Động Sản</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    <th>Người Đăng</th>
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Tình Trạng</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $key => $data)
                    <td>{{ ++$i }}</td>
                    <td>{{Form::checkbox('id[]',$data->id)}}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                    @php
                        $mainImage=explode(';',$data->image);
                    @endphp
                        {{Html::image($mainImage[0],'',array('class'=>'product-img'))}}

                    </td>
                    @if($data->price==0)
                        <td>Liên Hệ</td>
                    @else
                        <td>{{$data->price}}</td>
                    @endif
                    <td>{{ $data->categoryproduct->name }}</td>
                    <td>{{ $data->users->name }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td>{{$data->isActive}}</td>
                    <td>
                        @permission(('product-edit'))
                        <a class="btn btn-primary" href="{{ route('product.edit',$data->id) }}">Cập Nhật</a>
                        @endpermission
                        @permission(('product-delete'))
                        {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $data->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {!! $products->links() !!}
    </div>
@stop