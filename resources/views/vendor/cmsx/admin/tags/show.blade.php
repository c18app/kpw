@extends('cmsx::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a href="{{ route('tags.index') }}" class="btn btn-link btn-xs" role="button"><span
                            class="far fa-arrow-alt-circle-left"></span> Back</a>
                <a href="{{ route('tags.edit', ['tag'=>$tag]) }}" class="btn btn-warning btn-xs"
                   role="button"><span class="fas fa-pencil-alt"></span> Edit</a>
            </div>
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <tr>
                    <th class="col-lg-2">id</th>
                    <th class="col-lg-10">value</th>
                </tr>
                <tr>
                    <td class="active">title:</td>
                    <td>{{ $tag->title }}</td>
                </tr>
                <tr>
                    <td class="active">invisible:</td>
                    <td>{{ $tag->invisible }}</td>
                </tr>
            </table>
        </div>
    </div>

    @if($tag->pages()->count()>0)
        <div class="row">
            <div class="col-lg-12">
                Uses in Pages
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    @foreach($tag->pages as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->title }}</td>
                            <td class="text-right">
                                <a href="{{ route('pages.edit', ['page'=>$v]) }}" class="btn btn-warning btn-xs"
                                   role="button"><span class="fas fa-pencil-alt"></span> Edit</a>
                                <a href="{{ route('pages.show', ['page'=>$v]) }}" class="btn btn-info btn-xs"
                                   role="button"><span class="fas fa-search"></span> Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

    @if($tag->articles()->count()>0)
        <div class="row">
            <div class="col-lg-12">
                Uses in Articles
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    @foreach($tag->articles as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->title }}</td>
                            <td class="text-right">
                                <a href="{{ route('articles.edit', ['page'=>$v]) }}" class="btn btn-warning btn-xs"
                                   role="button"><span class="fas fa-pencil-alt"></span> Edit</a>
                                <a href="{{ route('articles.show', ['page'=>$v]) }}" class="btn btn-info btn-xs"
                                   role="button"><span class="fas fa-search"></span> Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@endsection
