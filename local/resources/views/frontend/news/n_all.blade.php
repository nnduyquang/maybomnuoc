<div id="n_all">
    <div class="title-header">
        <div class="container">
            @if($data['type']==0)
                <h1>{{$data['categoryPost']->name}}</h1>
            @else
                <h1>{{$data['post']->title}}</h1>
            @endif
        </div>
    </div>
    <div class="container">
        @if($data['type']==0)
            <div class="row">
                @foreach($data['post'] as $key=>$item)
                    <div class="col-md-6 mb-3">
                        <div class="card one-news h-100">
                            <a class="img-wrap"
                               href="{{URL::to('tin-tuc/'.$item->path)}}">{{ Html::image($item->image,'',array('class'=>'img-one-news')) }}</a>
                            <div class="card-body">
                                <h2 class="title card-title">
                                    <a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a>
                                </h2>
                                <div class="description">
                                    {!! $item->description !!}
                                </div>
                                <div class="info card-footer">
                                    <hr>
                                    <span><i class="far fa-user"></i>Đăng bởi: <span>{{$item->users->name}}</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="detail-new">
                {{ Html::image($data['post']->image,'',array('class'=>'img-one-news')) }}
                <div class="description">
                    {!! $data['post']->content !!}
                </div>
            </div>
        @endif

    </div>
</div>