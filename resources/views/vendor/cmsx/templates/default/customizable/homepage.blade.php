@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'homepage'])

<?php
$terms = App\WorkshopTerm::where('finish', '>', \Carbon\Carbon::now())->get();
?>

@section('content')
    <div class="container">
    @include(Config('cmsx.app.template').'::flash')
    </div>
    <div class="row infopruh">
        <div class="container">
            <div class="line-1">&lt; Chcete se naučit</div>
            <div class="line-2">&nbsp;&nbsp;&nbsp;&nbsp;PROGRAMOVAT WEBY? <span class="regular">/&gt;</span>&nbsp;</div>
            <div class="clearfix"></div>

            <div class="infotext">Přijďte na můj kurz. Ukážu vám, jak na to a nasměruji vás správným<br>
                směrem. Po absolvování kurzu budete mít dobrý základ a potenciál pro<br>
                další pokrok.
            </div>
            <a href="#koupit-kurz" class="btn-white scroll-btn">Volné termíny</a>
        </div>
    </div>

    <div class="container questions">
        <div class="row">
            <div class="col-xs-4 text-center">
                <div class="question-mark">?</div>
                <div class="line-1">CSS, Php, MySQL<br>jsou pro vás sprostá slova?</div>
                <div class="line-2">chcete vědět, co znamenají tajemné zápisy jako by byly z vesmíru?</div>
            </div>
            <div class="col-xs-4 text-center">
                <div class="question-mark">?</div>
                <div class="line-1">Nevíte, jak začít<br>a váháte?</div>
                <div class="line-2">chcete se naučit programovat web&nbsp;a zatím jste nevěděli odkud se do toho pustit?</div>
            </div>
            <div class="col-xs-4 text-center">
                <div class="question-mark">?</div>
                <div class="line-1">Jste začátečníci, nebo<br>už se trochu vyznáte?</div>
                <div class="line-2">láká vás vyzkoušet si naprogramovat vlastní web úplně od začátku, nebo chcete pokročit dál?</div>
            </div>
        </div>
    </div>

    <div class="row prihlastese-omne">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="title">Přihlaste se na kurz</div>
                    <div class="subtitle">a naučte se základy,<br>zvládneme to za 8 hodin</div>
                    <ul class="se-sipkama">
                        <li>Kurz se zaměřuje na čisté základy a po absolvování budete mít dobrý základ k tomu naučit se
                            programovat weby.
                        </li>
                        <li>Naučíte se, jak se používají HTML značky, dozvíte se, k čemu je CSS a k čemu se používá
                            JavaScript.
                        </li>
                        <li>Programování logiky webu bude probíhat v PHP, povíme si i o frameworku Laravel.</li>
                        <li>Popíšeme si, k čemu a jak se používají databáze v tomto konkrétním případě MySQL.</li>
                        <li>Dozvíte se další informace o věcech jako GIT a composer.</li>
                        <li>Ukážeme si nástroje, které nám usnadní práci při vývoji a řekneme si, co potřebujete k
                            vytvoření webu.
                        </li>
                    </ul>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <div class="title">Něco o mně</div>
                    <div class="subtitle">pomůžu vám<br>udělat první krok</div>
                    <div class="content">
                        <div class="img-wrap">
                            <img src="/img/me.png">
                        </div>
                        <span class="text-justify">O Programování se zajímám už od roku 1989. Od roku 2009 se profesionálně zabývám programováním webových stránek v PHP.</span>
                        <div class="clearfix"></div>
                    </div>

                    <div class="content-bottom">
                        Mám bohaté zkušenosti jako freelancer s prací ve velkých firmách jako: <a href="http://economia.ihned.cz/" target="_blank">Economia, a.s</a> (<a href="https://ihned.cz/" target="_blank">ihned.cz</a>, <a href="https://aktualne.cz/" target="_blank">aktualne.cz</a>), <a href="https://www.ifortuna.cz/" target="_blank">FORTUNA GAME a.s.</a>, <a href="http://www.ccs.cz/" target="_blank">CCS Česká společnost pro platební karty s.r.o.</a>, <a href="https://www.patria.cz/" target="_blank">Patria Finance, a.s.</a> Věřím, že jsem schopný, předat na semináři zajímavé a podnětné informace, které vám pomůžou udělat první krok.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row co-muzete-ocekavat">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="title">Co můžete očekávat</div>
                    <div class="subtitle">získáte zajímavé a podnětné informace</div>
                    <ul class="se-sipkama se-sipkama-white">
                        <li>Dozvíte se mnoho informací o tom, jak web funguje, Co je to doména a mnoho dalších důležitých věcí.</li>
                        <li>Co je to server a jak je možné, že můj počítač ví, kam má jít, když se chcete podívat na nějaký web.</li>
                        <li>Budete mít znalosti, k tomu abyste se konečně začali učit web programovat.</li>
                        <li>Získáte kontakty na další lidi, kteří s programováním začínají a můžeme se společně rozvíjet.</li>
                        <li>Dostanete rady, odkazy a přístupy na materiály, které vám při učení pomůžou.</li>
                    </ul>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <div class="content">
                        <img src="/img/pic01.png" class="img-1">
                        <img src="/img/pic02.png" class="img-2">
                        <img src="/img/pic03.png" class="img-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row info-o-kurzu">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="title">Kde, jak dlouho,<br>za kolik?</div>
                    <div class="content">Kurz trvá celkem <span>8 hodin</span> a to od 10:00 do 18:00.<br>
                        Bude se konat pro min. <span>4</span> a max. <span>6 osob.</span><br>
                        <br>
                        Sejdeme se v 10 ráno v Modré škole:<br>
                        <br>
                        Základní škola a Střední škola<br>
                        Kupeckého 576<br>
                        149 00 Praha 4<br>
                        kousek od metra Háje<br>
                        <br>
                        <a href="https://mapy.cz/s/2wOo0" target="_blank"><span>Ukázat na mapě</span></a>
                        <img src="img/misto.png" class="misto">
                    </div>

                </div>
                <div class="col-xs-6">
                    <div class="title">Co<br>si vzít sebou?</div>
                    <ul class="se-sipkama">
                        <li>Vezměte si s sebou notebook, není to podmínka, ale pak si kurz tolik neužijete, a vše budete muset zkoušet až sami doma.</li>
                        <li>Tužky a sešit, dobrou náladu a chuť se učit.</li>
                        <li class="bez-sipky">Určitě bude ještě nějakou dobu trvat, než si naprogramujete svůj vlastní velký web. Nicméně čím dříve začnete a čím víc do toho dáte energie, tím dříve se Vám to podaří.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row cena-kurzu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 content">
                    <div class="description"> Cena za kurz pro začátečníky je celkem <span class="cena">2&nbsp;790</span> Kč</div>
                    <span class="btn-center"><a href="#koupit-kurz" class="btn-white scroll-btn"><span class="sipcicka"></span>Volné termíny</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container terminy-kurzu" id="koupit-kurz">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">Termíny<br>kurzů programování</div>
                <div class="forms">
                    @forelse($terms as $term)
                    <div class="form-wrap">
                        <div class="form-text">
                            <div class="col-1 col-xs-2">Základy<br>programování</div>
                            <div class="col-2x col-xs-2 text">{{ \Carbon\Carbon::parse($term->beginning)->format('d.m.Y') }}<br>(Od {{ \Carbon\Carbon::parse($term->beginning)->format('H') }} do {{  \Carbon\Carbon::parse($term->finish)->format('H') }} hod)</div>
                            <div class="col-2x col-xs-3 text">ZŠ a SŠ Kupeckého 576<br>Praha 4</div>
                            <div class="col-2x col-xs-2 text" style="margin-top: 30px;">Cena: <span class="cena">2&nbsp;790 Kč</span></div>
                            <div class="col-2x col-xs-3 text text-right" style="margin-top: 9px;">
                                <button type="button" class="btn-red btn-koupit" onclick="$('.form-form').not('#form-termin-{{ $term->id }}').slideUp(); $('.btn-koupit').not('#form-koupit-{{ $term->id }}').fadeIn(); $('#form-termin-{{ $term->id }}').slideDown(); $('#form-close-{{ $term->id }}').fadeIn(); $('.close-form').not('#form-close-{{ $term->id }}').fadeOut(); $(this).fadeOut();" id="form-koupit-{{ $term->id }}">Koupit kurz</button>
                                <a href="javascript:void(0);" class="close-form btn-red" onclick="$('.form-form').slideUp(); $('.btn-koupit').fadeIn(); $('.close-form').fadeOut();" id="form-close-{{ $term->id }}">x</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-form" id="form-termin-{{ $term->id }}">
                            <form action="{{ route('workshop.register') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="workshop_term_id" value="{{ $term->id }}">
                                <div class="col-xs-4">
                                <div class="form-group">
                                    <label class="red">Jméno a příjmení</label>
                                    <input type="text" name="name" class="form-control input-text" value="{{ old('name') }}">
                                </div>
                                </div>

                                <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="red">Váš e-mail</label>
                                    <input type="text" name="email" class="form-control input-text" value="{{ old('email') }}">
                                </div>
                                </div>

                                <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="red">Telefon na vás</label>
                                    <input type="text" name="phone" class="form-control input-text" value="{{ old('phone') }}">
                                </div>
                                </div>

                                <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="confirm" value="on" {{ old('confirm') ? 'checked="checked"' : '' }}> Odesláním souhlasím se <a href="{{ \C18app\Cmsx\Models\Page::firstOrNew(['id' => 18])->getUrl() }}" target="_blank" class="ochrana">zpracováním osobních údajů</a>
                                    </label>
                                </div>
                                </div>

                                <div class="col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-red">Koupit kurz</button>
                                </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @empty
                        nejsou žádné volné terminy
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="row sdileni">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="title">Cenné zkušenosti<br>do vaší schránky</div>
                    <div class="description">Nechte mi prosím e-mail,<br>na který vám občas pošlu zajímavé tipy a pracně
                        nabyté materiály.
                    </div>
                    <div class="row">
                        <form action="{{ route('workshop.newsletter') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-xs-7"><input type="email" name="email" value=""
                                                         placeholder="Váš e-mail"></div>
                            <div class="col-xs-5">
                                <button type="submit" class="btn-red">Vložit e-mail</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="title">Sdílejte stránku<br>s přáteli,&nbsp;&nbsp;díky!</div>
                    <div class="fb-share-button" data-href="{{ url()->current() }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Sdílet</a></div>
                    <div class="clearfix"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/kurzprogramovaniwebu/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kurzprogramovaniwebu/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kurzprogramovaniwebu/">Kurz programování webu</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function (){
            $(".scroll-btn").click(function (event){
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 800);
            });
        });
    </script>
@endsection