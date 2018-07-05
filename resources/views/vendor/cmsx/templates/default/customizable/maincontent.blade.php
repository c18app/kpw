@if(isset($content_type) && $content_type == 'homepage')
    <body class="frontend" id="homepage">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.0&appId=228982927679742';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @include(Config('cmsx.app.template').'::frontend.menu.top')
    <div class="clearfix"></div>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    @include(Config('cmsx.app.template').'::frontend.menu.bottom')
    </body>
@else
    <body class="frontend" id="page">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.0&appId=228982927679742';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @include(Config('cmsx.app.template').'::frontend.menu.top')
    <div class="container-fluid">
        <div class="row infopruh">
            <div class="container">
                <h1 class="title">@section('content-title')Články<br>o programování</h1>@show
            </div>
        </div>
    </div>
    <div class="container" id="main-content">
        <div class="row">
            <div class="col-lg-2">
                @include(Config('cmsx.app.template').'::frontend.menu.side')
            </div>
            <div class="col-lg-10 content">
                @yield('content')

                <div class="share">
                    <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                </div>
            </div>
        </div>
    </div>
    @include(Config('cmsx.app.template').'::frontend.menu.bottom')
    </body>
@endif