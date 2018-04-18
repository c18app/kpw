<li class="item"><a class="nav-link" href="{{ route('index.articles') }}">Články</a></li>
@foreach(\C18app\Cmsx\Models\Page::whereHas('tags', function ($query) {$query->where('title', 'leftmenu');})->orderBy('order', 'asc')->orderby('id', 'desc')->get() as $page)
    <li class="item"><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></li>
@endforeach
