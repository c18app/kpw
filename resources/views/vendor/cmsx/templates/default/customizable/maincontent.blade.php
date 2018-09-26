@if(isset($content_type) && $content_type == 'homepage')
    <body class="frontend" id="homepage">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
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
@elseif(isset($content_type) && $content_type == 'dokumentace')
    <body class="frontend blank" id="page">
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
            <div class="col-xs-12 content">
                <div class="row">
                    <style>
                        #page #main-content .content .nav-pills a {
                            text-decoration: none;
                        }

                        #page #main-content .content .nav-pills li.active a {
                            color: #fff;
                            background-color: #ee4445;
                        }

                        #page #main-content .content .nav-pills li {
                            background-image: none;
                            padding-left: 15px;
                        }

                        #page #main-content .content .panel {
                            box-shadow: none;
                            -webkit-box-shadow: none;
                            margin-bottom: 0;
                        }

                        #page #main-content .content pre {
                            padding: 10.5px
                        }
                    </style>
                    <ul class="col-xs-2 nav nav-pills nav-stacked">
                        <li><a href="{{ route('dokumentace.html') }}">HTML</a></li>
                        <li><a href="{{ route('dokumentace.css') }}">CSS</a></li>
                        <li><a href="#css">javaScript</a></li>
                        <li><a href="#php">PHP</a></li>
                        <li><a href="#mysql">MySQL</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="#nastroje">Nástroje</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="#domena">Doména</a></li>
                        <li><a href="#server">Server</a></li>
                        <li><a href="#dns">DNS</a></li>
                        <li><a href="#ssl">SSL</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="#fw">FW</a></li>
                        <li><a href="#git">GIT</a></li>
                        <li><a href="#composer">Composer</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="/kurzy/vzorovy/kod">Vzorový kód</a></li>
                    </ul>
                    <div class="col-xs-10">
                        <div id="dokumenty">
                            @yield('content')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="bottom-content">
        @include('vendor.cmsx.templates.default.customizable.footer')
    </div>
    </body>
@else
    <body class="frontend" id="page">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
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
                    <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count"
                         data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                </div>
            </div>
        </div>
    </div>
    @include(Config('cmsx.app.template').'::frontend.menu.bottom')
    </body>
@endif