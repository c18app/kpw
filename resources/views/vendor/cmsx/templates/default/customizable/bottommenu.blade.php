<hr>
<div class="container">
    <ul>
        @foreach(\C18app\Cmsx\Models\Page::whereHas('tags', function ($query) {$query->where('title', 'bottommenu');})->orderBy('order', 'asc')->orderby('id', 'desc')->get() as $page)
            <li class="item"><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></li>
        @endforeach
    </ul>


    <div class="row text-center">
        &copy; {{ config('cmsx.app.name') }} {{ date('Y') }}
    </div>
</div>
