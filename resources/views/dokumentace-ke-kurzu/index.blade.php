@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'dokumentace'])

@section('title', ' - dokumentace ke kurzu')

@section('content-title', 'dokumentace ke kurzu')

@section('content')
    <h2>Dokumentace</h2>
    <ul>
        <li><a href="{{ route('dokumentace.html') }}">HTML</a></li>
        <li><a href="{{ route('dokumentace.css') }}">CSS</a></li>
    </ul>
@endsection

