@extends(Config('cmsx.app.template').'::layouts.main')

@section('content')
    <h1>Články</h1>

    <ul class="articles">
        @foreach($clanky as $clanek)
            <li class="row">
                @if(file_exists(public_path('img/article/'.$clanek->id.'.png')))
                    <img src="{{ url('img/article/'.$clanek->id.'.png') }}" class="col-sm-4 hidden-xs">
                @else
                    <img src="{{ url('img/pic01.png') }}" class="col-sm-4 hidden-xs">
                @endif
                <div class="box col-sm-8">
                    <h2><a href="{{ $clanek->getUrl() }}">{{ $clanek->title }}</a></h2>
                    <span>{{ substr(strip_tags($clanek->content), 0, 250) }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
