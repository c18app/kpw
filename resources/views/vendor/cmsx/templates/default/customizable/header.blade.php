@if(isset($contentType) && $contentType == 'article' && file_exists(public_path('img/article/'.$contentData->id.'.png')))
    @php
        $og_image = url('img/article/'.$contentData->id.'.png');
    @endphp
@else
    @php
        $og_image = url('img/code.jpg');
    @endphp
@endif
<link href="/css/programovaniwebu.css?v=201809" rel="stylesheet">
<link href="/fonts/ibm-plex/stylesheet.css" rel="stylesheet">
<meta property="og:url"           content="{{ url()->current() }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ config('cmsx.app.name') }}@section('title')@show" />
<meta property="og:description"   content="@section('content-title')Kurzy a informace o programování webu.@show" />
<meta property="og:image"         content="{{ $og_image }}" />
<meta property="fb:app_id"        content="228982927679742" />
<meta name="viewport" content="initial-scale=1">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115776779-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-115776779-1');
</script>
