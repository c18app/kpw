<li class="item">
    <a href="{{ route('homepage') }}">Kurz</a>
</li>
<li class="item">
    <a href="{{ route('workshop.terms') }}">Termíny kurzů</a>
</li>
@foreach(\C18app\Cmsx\Models\Page::whereHas('tags', function ($query) {$query->where('title', 'leftmenu');})->orderBy('order', 'asc')->orderby('id', 'desc')->get() as $page)
    <li class="item"><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></li>
@endforeach