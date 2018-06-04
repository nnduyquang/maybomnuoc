@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Sản Phẩm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'product.store','method'=>'POST')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <strong>Tên Sản Phẩm:</strong>
                {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                <div class="form-group">
                    <strong>Mô Tả Ngắn:</strong>
                    {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 pl-0">
                            <div class="form-group">
                                <strong>Hình Đại Diện 1: </strong>
                                {!! Form::text('image[]', null, array('class' => 'form-control','id'=>'pathImage1')) !!}
                                <br>
                                {!! Form::button('Tìm', array('id' => 'btnBrowseImage1','class'=>'btn btn-primary')) !!}
                            </div>
                            <div class="form-group">
                                {{ Html::image('','',array('id'=>'showHinh1','class'=>'show-image'))}}
                                <span id="clear-image-1" style="text-align: center;display:none">X</span>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <strong>Hình Đại Diện 2: </strong>
                                {!! Form::text('image[]', null, array('class' => 'form-control','id'=>'pathImage2')) !!}
                                <br>
                                {!! Form::button('Tìm', array('id' => 'btnBrowseImage2','class'=>'btn btn-primary')) !!}
                            </div>
                            <div class="form-group">
                                {{ Html::image('','',array('id'=>'showHinh2','class'=>'show-image'))}}
                                <span id="clear-image-2" style="text-align: center;display: none">X</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::button('Thêm Hình Dự Án', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    <div id="add-image" class="row">

                    </div>
                </div>
                <div class="form-group">
                    <strong>Loại Sản Phẩm</strong>
                    {!! Form::select('category_product',$dd_category_products, null,array('class' => 'form-control')) !!}
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>Giá: </strong>
                            {!! Form::text('price',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>% Giảm Giá: </strong>
                            {!! Form::text('sale',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>Giá Giảm: </strong>
                            {!! Form::text('final_price',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <strong>Sản Phẩm Bán Chạy? </strong>
                    <input name="is_best_sale" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <strong>Mô Tả Bất Động Sản:</strong>
            {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <hr>
        <div class="col-md-12 p-0">
            <div class="row no-gutters">
                <h3>SEO</h3>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Tiêu Đề (title):</strong>
                        {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Mô Tả (description):</strong>
                        {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Keywords (cách nhau dấu phẩy ','):</strong>
                        {!! Form::text('seo_keywords',null, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                </div>
            </div>
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
        </div>
    </div>

    {!! Form::close() !!}
@stop