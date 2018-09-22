@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'blank'])

@section('title', ' - dokumentace ke kurzu')

@section('content-title', 'dokumentace ke kurzu')

@section('content')
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
    </style>
    <div class="row">
        <ul class="col-xs-2 nav nav-pills nav-stacked">
            <li><a href="#html" data-toggle="collapse" data-parent="#accordion">HTML</a></li>
            <li><a href="#css" data-toggle="collapse" data-parent="#accordion">CSS</a></li>
            <li><a href="#css" data-toggle="collapse" data-parent="#accordion">javaScript</a></li>
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
            <li>
                <hr>
            </li>
            <li><a href="#fw">FW</a></li>
            <li><a href="#git">GIT</a></li>
            <li><a href="#composer">Composer</a></li>
            <li>
                <hr>
            </li>
            <li><a href="#fw">Vzorový kód</a></li>
        </ul>
        <div class="col-xs-10">
            <div id="accordion">
                <div class="panel">
                    <div id="dokumenty" class="collapse in">
                        dokumenty
                    </div>
                </div>
                <div class="panel">
                    <div id="html" class="collapse">
                        @include('dokumentace-ke-kurzu.@html')
                    </div>
                </div>
                <div class="panel">
                    <div id="css" class="collapse">
                        @include('dokumentace-ke-kurzu.@css')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

