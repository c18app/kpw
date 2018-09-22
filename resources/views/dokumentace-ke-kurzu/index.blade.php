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

        #page #main-content .content .panel {
            box-shadow: none;
            -webkit-box-shadow: none;
            margin-bottom: 0;
        }

        #page #main-content .content pre {
         padding: 10.5px
        }
</style>
    <div class="row">
        <ul class="col-xs-2 nav nav-pills nav-stacked">
            <li><a href="#html" data-toggle="collapse" data-parent="#accordion">HTML</a></li>
            <li><a href="#css" data-toggle="collapse" data-parent="#accordion">CSS</a></li>
            <li><a href="#css" data-toggle="collapse" data-parent="#accordion">javaScript</a></li>
            <li><a href="#php" data-toggle="collapse" data-parent="#accordion">PHP</a></li>
            <li><a href="#mysql" data-toggle="collapse" data-parent="#accordion">MySQL</a></li>
            <li>
                <hr>
            </li>
            <li><a href="#nastroje" data-toggle="collapse" data-parent="#accordion">Nástroje</a></li>
            <li>
                <hr>
            </li>
            <li><a href="#domena" data-toggle="collapse" data-parent="#accordion">Doména</a></li>
            <li><a href="#server" data-toggle="collapse" data-parent="#accordion">Server</a></li>
            <li><a href="#dns" data-toggle="collapse" data-parent="#accordion">DNS</a></li>
            <li><a href="#ssl" data-toggle="collapse" data-parent="#accordion">SSL</a></li>
            <li>
                <hr>
            </li>
            <li><a href="#fw" data-toggle="collapse" data-parent="#accordion">FW</a></li>
            <li><a href="#git" data-toggle="collapse" data-parent="#accordion">GIT</a></li>
            <li><a href="#composer" data-toggle="collapse" data-parent="#accordion">Composer</a></li>
            <li>
                <hr>
            </li>
            <li><a href="/kurzy/vzorovy/kod">Vzorový kód</a></li>
        </ul>
        <div class="col-xs-10">
            <div id="accordion">
                <div class="panel">
                    <div id="dokumenty" class="collapse in">
                        <h2>Dokumentace</h2>
                        <ul>
                            <li><a href="#html" data-toggle="collapse" data-parent="#accordion">HTML</a></li>
                        </ul>
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

