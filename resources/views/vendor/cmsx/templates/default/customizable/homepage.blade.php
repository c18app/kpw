@extends(Config('cmsx.app.template').'::layouts.main')

@php
    $clanky = C18app\Cmsx\Models\Article::limit(10)->orderBy('id', 'desc')->get();
@endphp

@section('content')
    <h1>Články</h1>

    <ul class="articles">
        @foreach($clanky as $clanek)
            <li class="row">
                <div class="box-img hidden-xs">
                    <div class="img-wrap">
                        <a href="{{ $clanek->getUrl() }}">
                            @if(file_exists(public_path('img/article/'.$clanek->id.'.png')))
                                <img src="{{ url('img/article/'.$clanek->id.'.png') }}">
                            @else
                                <img src="{{ url('img/pic01.png') }}">
                            @endif
                        </a>
                    </div>
                </div>
                <div class="box col-sm-8 col-xs-12">
                    <h2><a href="{{ $clanek->getUrl() }}">{{ $clanek->title }}</a></h2>
                    <span>{{ substr(strip_tags($clanek->content), 0, 250) }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endsection