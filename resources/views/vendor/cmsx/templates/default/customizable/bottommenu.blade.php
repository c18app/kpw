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
                <div class="fb-group" data-href="https://www.facebook.com/groups/programovaniwebu/" data-width="280" data-show-social-context="true" data-show-metadata="true"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid paticka">
    <div class="container">
        <div class="col-sm-8 col-xs-12">Provozovatel webu: Michal Nosavcov, Nad Babím dolem 401, 250 64 Měšice<br>
            tel: 603&nbsp;323&nbsp;878, email: <a href="mailto:michal@programovaniwebu.cz">michal@programovaniwebu.cz</a>, IČ: 64845915 |
            <a href="{{ \C18app\Cmsx\Models\Page::findOrFail(18)->getUrl() }}" class="white">Ochrana osobních údajů</a> |
            <a href="{{ route('affiliate.index') }}" class="white">Affiliate</a>
        </div>
        <div class="col-sm-4 col-xs-12 text-right"><a href="https://www.facebook.com/groups/programovaniwebu/" class="white fb" target="_blank">Další tipy také<br>na facebooku</a></div>
    </div>
</div>
