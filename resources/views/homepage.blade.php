@extends('cmsx::layouts.frontend')



@section('content')
    <img src="{{ url('img/code_945.jpg') }}" style="width: 100%;">

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
        <li>Seminář se zaměřuje na čisté základy programování webu.</li>
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
        <li>Seminář bude trvat celkem 8 hodin a to od 10:00 do 18:00.</li>
        <li>
            Sejdeme se ráno v Modré škole:<br>
            Základní škola a Střední škola<br>
            Kupeckého 576<br>
            149 00 Praha 4<br>
            <strong>kousek od metra Háje</strong>
        </li>
        <li>Cena za tento seminář je celkem 2.790,-</li>
        <li>Celkem nás bude minimálně 4 a maximálně 6 studentů.</li>
    </ul>

    <h2>Co si vzít s sebou</h2>
    <ul>
        <li>Vezměte si s sebou <strong>notebook</strong>, není to podmínka, ale pak si seminář tolik neužijete, a vše budete muset zkoušet až sami doma.</li>
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

@endsection