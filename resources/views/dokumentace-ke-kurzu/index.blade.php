@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'dokumentace'])

@section('title', ' - dokumentace ke kurzu')

@section('content-title', 'dokumentace ke kurzu')

@section('content')
    <h2>Dokumentace</h2>
    <ul>
        @include('dokumentace-ke-kurzu.@menu')
    </ul>
@endsection

