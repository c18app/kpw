@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'homepage'])

@section('content')
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
                        Mám bohaté zkušenosti jako freelancer s prací ve velkých firmách jako: <a href="#">Economia, a.s</a> (ihned.cz, aktualne.cz), FORTUNA GAME a.s., CCS Česká společnost pro platební karty s.r.o., Patria Finance, a.s. Věřím, že jsem schopný, předat na semináři zajímavé a podnětné informace, které vám pomůžou udělat první krok.
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
                    <div class="content">Kurz bude trvat celkem <span>8 hodin</span> a to od 10:00 do 18:00.<br>
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
                    Cena za kurz pro začátečníky je celkem 2 790 Kč
                    <span class="btn-center"><a href="#koupit-kurz" class="btn-white scroll-btn"><span class="sipcicka"></span>Volné termíny</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container terminy-kurzu" id="koupit-kurz">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">Termíny<br>kurzů programování</div>
            </div>
        </div>
    </div>

    <div class="row sdileni">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="title">Cenné zkušenosti<br>do vaší schránky</div>
                    <div class="description">Nechte mi prosím e-mail,<br>na který vám občas pošlu zajímavé tipy a pracně nabyté materiály.</div>
                </div>
                <div class="col-xs-6">
                    <div class="title">Sdílejte stránku<br>s přáteli,&nbsp;&nbsp;díky!</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Kurz programování webu</h1>

        <p>
            Základy programování webu
            <br>
            (základní znalosti o programování webu)
        </p>
        <ul>
            <li>Láká Vás vyzkoušet si naprogramovat vlastní web úplně od začátku?</li>
            <li>Chcete vědět, co znamenají tajemné zápisy jako by byly z vesmíru?</li>
            <li>Chcete se naučit programovat web a zatím jste jen nevěděli odkud se do toho pustit?</li>
        </ul>

        <h2>Více informací</h2>
        <ul>
            <li>Kurz se zaměřuje na čisté základy programování webu.</li>
            <li>Po absolvování budete mít dobrý základ k tomu naučit se programovat weby.</li>
            <li>Pokud se do toho chcete <strong>opravdu</strong> pustit, počítejte s tím, že to pro Vás znamená hodiny práce.</li>
            <li>Naučíte se, jak se používají <strong>HTML</strong> značky.</li>
            <li>Dozvíte se, k čemu je <strong>CSS</strong>.</li>
            <li>K čemu se používá <strong>JavaScript</strong>.</li>
            <li>Programování logiky webu budeme probíhat v <strong>PHP</strong>, povíme si i o frameworku <strong>Laravel</strong>.</li>
            <li>Popíšeme si, k čemu a jak se používají <strong>databáze</strong> v tomto konkrétním případě MySQL.</li>
            <li>Další informace o věcech jako <strong>GIT</strong> a <strong>composer</strong>.</li>
            <li>Ukážeme si nějaké <strong>nástroje</strong>, které nám usnadní práci při vývoji.</li>
            <li>Řekneme si, co potřebujete k vytvoření webu. Opravdu toho není potřeba moc, někdy stačí obyčejný textový editor.</li>
        </ul>

        <h2>Kde, jak dlouho, za kolik...</h2>
        <ul>
            <li>Kurz bude trvat celkem 8 hodin a to od 10:00 do 18:00.</li>
            <li>
                Sejdeme se ráno v Modré škole:<br>
                Základní škola a Střední škola<br>
                Kupeckého 576<br>
                149 00 Praha 4<br>
                <strong>kousek od metra Háje</strong>
            </li>
            <li>Cena za tento kurz je celkem 2.790,-</li>
            <li>Celkem nás bude minimálně 4 a maximálně 6 studentů.</li>
        </ul>

        <h2>Co si vzít s sebou</h2>
        <ul>
            <li>Vezměte si s sebou <strong>notebook</strong>, není to podmínka, ale pak si kurz tolik neužijete, a vše budete muset zkoušet až sami doma.</li>
            <li><strong>Tužky</strong> a <strong>sešit</strong>.</li>
            <li>Dobrou náladu a chuť se učit.</li>
        </ul>

        <h2>Co můžu očekávat</h2>
        <ul>
            <li>Dozvíte se mnoho informací o tom, jak web funguje.</li>
            <li>Co je to server a jak je možné, že můj počítač ví, kam má jít, když se chci podívat na nějaký web.</li>
            <li>Co je to doména a mnoho dalších důležitých věcí.</li>
            <li>Budu mít znalosti, k tomu abych se začal učit web programovat.</li>
            <li>Získám kontakty na další lidi, kteří s programováním začínají a můžeme se společně rozvíjet.</li>
            <li>Dostanete rady, odkazy a přístupy na materiály, které Vám při učení pomůžou.</li>
        </ul>

        <p>
            Určitě bude ještě nějakou dobu trvat, než si naprogramujete svůj vlastní velký web.
            Nicméně čím dříve začnete a čím víc do toho dáte energie, tím dříve se Vám to podaří.
        </p>
        <a href="{{ route('workshop.terms') }}" class="btn btn-success">Chci se přihlásit</a>
        <br>
        <br>
        <br>
        <br>
        <br>
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