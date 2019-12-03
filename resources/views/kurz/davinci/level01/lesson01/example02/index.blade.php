@extends(Config('cmsx.app.template').'::layouts.main')

@section('content-title', 'Davinci#1 / 01 / příklad #2')
@section('content-title-hp', 'Davinci#1 / 01 / příklad #2')

@section('content')
    <style>
        a.odkaz-po-najeti-zmeni-barvu:hover {
            color: #192243 !important;
        }

        img.kocicka {
            background-color: #eee;
            padding: 10px;
            border: 1px solid #333;
            box-shadow: #192243 5px 2px 8px 0px;
            /* box-shadow: <barva> <vodorovný posun> <svislý posun> <rozostření> <rozprostření> */
        }

        .text-se-stinem {
            font-size: 32px;
            font-weight: bold;
            color: #ee4445;
            text-shadow: #192243 5px 2px 8px;
            /* box-shadow: <barva> <vodorovný posun> <svislý posun> <rozostření> <rozprostření> */
        }

        .zakladni-box {
            margin-top: 50px;
            width: 50%;
            height: 100px;
            background-color: #192243;
            color: #fff;
            text-align: center;
            line-height: 100px;
        }

        .plynula-zmena-barvy {
            transition: background-color .4s ease-out;
        }

        .plynula-zmena-barvy:hover {
            background-color: #ee4445;
        }

        .presunuti-prvku-po-najeti {
            position: relative;
        }

        .presunuti-prvku-po-najeti .kosticka {
            position: absolute;
            width: 25%;
            height: 100px;
            top: 0;
            right: 0;
            display: inline-block;
            background-color: #ee4445;
            transition: right 1s ease-out, width 1s ease-out;
        }

        .presunuti-prvku-po-najeti .text {
            position: relative;
            z-index: 1;
        }

        .presunuti-prvku-po-najeti:hover .kosticka {
            width: 50%;
            right: 50%;
        }

        .otoceny-prvek {
            margin-top: 100px;
            margin-bottom: 100px !important;
            transform: rotate(160deg);
        }

        .duhove-pozadi {
            color: #000;
            font-weight: bold;
            background-image: linear-gradient(to left, #ff0000, #ff7f00, #ffff00, #00ff00, #0000ff, #2e2b5f, #8b00ff)
        }

        .zvetseni-po-najeti {
            transition: transform .4s ease-out;
        }

        .zvetseni-po-najeti:hover {
            transform: scale(1.1);
        }

        .vice-efektu-po-najeti {
            transition: transform .6s .4s ease-out, background-color .6s .4s ease-out, color .6s ease-out;
        }

        .vice-efektu-po-najeti:hover {
            transform: scale(1.1) rotate(10deg);
            background-color: #ee4445;
            color: #192243;
            transition: transform .6s ease-out, background-color .6s ease-out, color .6s .4s ease-out;
        }

        .animovany-prvek-1 {
            position: relative;
        }

        .animovany-prvek-1 .kosticka {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
            width: 25px;
            height: 25px;
            background-color: #ee4445;
            animation-name: animace-1;
            animation-duration: 5s;
            animation-timing-function: linear;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            animation-direction: normal;
            animation-fill-mode: forwards;
        }

        @keyframes animace-1 {
            0% {
                left: 0;
                top: 0;
            }
            40% {
                left: calc(100% - 25px);
                top: 0;
            }
            50% {
                left: calc(100% - 25px);
                top: 75px;
            }
            90% {
                left: 0;
                top: 75px;
            }
        }

        .animovany-prvek-2 {
            width: 100px;
            height: 100px;
            border: 10px solid #ee4445;
            border-radius: 50px;
            border-left: none;
            border-top: none;
        }
    </style>

    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>

    <h1>Příklad #2</h1>

    <h2>Ukázka pokročilých stylů</h2>

    <p>
        <a href="#" class="odkaz-po-najeti-zmeni-barvu" onclick="return false">odkaz po najetí změní barvu</a>
    </p>

    <p>
        obrázek v rámečku se stínem<br>
        <img src="https://blog.inpage.cz/obrazek/3/kitten-jpg/" style="width: 50%;" class="kocicka">
    </p>

    <p class="text-se-stinem">Text se stínem</p>

    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
            font-size: 24px;
            line-height: 1.5;
        }
    </style>
    <p class="font-pacifico" style="margin-top: 50px;">Text s google fontem "Pacifico" <a
                href="https://fonts.google.com/" target="_blank">https://fonts.google.com/</a></p>

    <p class="zakladni-box plynula-zmena-barvy">
        prvek s plynulou změnou barvy
    </p>

    <p class="zakladni-box presunuti-prvku-po-najeti">
        <span class="kosticka"></span>
        <span class="text">přesunutí prvku po najetí</span>
    </p>

    <p class="zakladni-box otoceny-prvek">
        otočený prvek o 160°
    </p>

    <p class="zakladni-box duhove-pozadi">
        duhové pozadí
    </p>

    <p class="zakladni-box zvetseni-po-najeti">
        zvětšení prvku po najetí
    </p>

    <p class="zakladni-box vice-efektu-po-najeti">
        více efektů po najetí
    </p>

    <p class="zakladni-box animovany-prvek-1">
        <span class="kosticka"></span>
        animovaný prvek
    </p>

    <div class="animovany-prvek-2"></div>

    <div style="clear: both;"></div>
    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>
    <br>
    <br>

    <div style="clear: both;"></div>
    <pre>{{
    htmlentities('<style>
a.odkaz-po-najeti-zmeni-barvu:hover {
  color: #192243;
}
</style>')
    }}</pre>

    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>
@endsection

