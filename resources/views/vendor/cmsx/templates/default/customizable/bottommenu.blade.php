<div class="sdileni">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <div class="title">Cenné zkušenosti<br>do vaší schránky</div>
                <div class="description">Nechte mi prosím e-mail,<br>na který vám občas pošlu zajímavé tipy a pracně
                    nabyté materiály.
                </div>
                <div class="row">
                    <form action="{{ route('index.newsletter') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-sm-7 col-xs-12"><input type="email" name="email" value=""
                                                               placeholder="Váš e-mail"></div>
                        <div class="col-sm-5 col-xs-12">
                            <button type="submit" class="btn-red">Vložit e-mail</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="title">Sdílejte stránku<br>s přáteli,&nbsp;&nbsp;díky!</div>
                <div class="fb-share-button" data-href="{{ url()->current() }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Sdílet</a></div>
                <div class="clearfix"></div>
                {{--<div class="fb-group" data-href="https://www.facebook.com/groups/programovaniwebu/" data-width="280" data-show-social-context="true" data-show-metadata="true"></div>--}}
                <div class="fb-page" data-href="https://www.facebook.com/programovaniwebucz/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/programovaniwebucz/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/programovaniwebucz/">Programování webu</a></blockquote></div>
            </div>
        </div>
    </div>
</div>

@include('vendor.cmsx.templates.default.customizable.footer')