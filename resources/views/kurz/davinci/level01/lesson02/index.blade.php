@extends(Config('cmsx.app.template').'::layouts.main')

@section('content-title', 'Davinci#1 / 0')
@section('content-title-hp', 'Davinci#1 / 02')

@section('content')
    <style>
        .monospace {
            font-family: Menlo, Monaco, Consolas, Courier New, monospace;
            background-color: #f7f3db;
            color: #333;
        }

        #piskvorky, #piskvorky *, #piskvorky *:after, #piskvorky *:before {
            box-sizing: content-box;
            font-size: 0;
        }

        #piskvorky li {
            background-image: none !important;
            padding-left: 0px !important;
        }
    </style>

    <h1>Lekce #2</h1>

    <h2>Piškvorky v JavaScriptu</h2>

    <p>
        <strong>JavaScript</strong> je objektově orientovaný, událostmi řízený skriptovací jazyk. I když se dá použít i
        na straně serveru, budeme ho používat jen jako nástroj na straně prohlížeče.
    </p>

    {{--    styly piskvorku--}}
    <style>
        #piskvorky {
            width: calc(60vw + 20px);
            height: calc(60vw + 20px);
            max-width: calc(60vh + 20px);
            max-height: calc(60vh + 20px);
            padding: 0;
            margin: 0 auto;
            background-color: #ccc;
            line-height: 0;
        }

        #piskvorky .policko {
            display: inline-block;
            width: 20vw;
            height: 20vw;
            max-width: 20vh;
            max-height: 20vh;
            border-right: 10px solid #555;
            border-bottom: 10px solid #555;
            position: relative;
        }

        #piskvorky #policko-1-3,
        #piskvorky #policko-2-3,
        #piskvorky #policko-3-3 {
            border-right: none;
        }

        #piskvorky #policko-3-1,
        #piskvorky #policko-3-2,
        #piskvorky #policko-3-3 {
            border-bottom: none;
        }

        #piskvorky .kolecko:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            margin-top: calc(20% - 10px);
            margin-left: calc(20% - 10px);
            width: 60%;
            height: 60%;
            border: 10px solid red;
            border-radius: 50%;
        }

        #piskvorky .krizek:before,
        #piskvorky .krizek:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            margin-top: calc(54% - 10px);
            margin-left: calc(8% - 10px);
            width: calc(84% + 20px);
            height: 0;
            border: 5px solid green;
        }

        #piskvorky .krizek:before {
            transform: rotate(45deg);
        }

        #piskvorky .krizek:after {
            transform: rotate(-45deg);
        }

        #piskvorky .prazdne.krizek:before,
        #piskvorky .prazdne.krizek:after,
        #piskvorky .prazdne.kolecko:after {
            border-color: #999;
        }

    </style>

    <hr>

    <div>
        <a href="#" id="btn-nova-hra">nová hra</a>
        <ul id="piskvorky">
            <li id="policko-1-1" class="policko prazdne"></li>
            <li id="policko-1-2" class="policko prazdne"></li>
            <li id="policko-1-3" class="policko prazdne"></li>
            <li id="policko-2-1" class="policko prazdne"></li>
            <li id="policko-2-2" class="policko prazdne"></li>
            <li id="policko-2-3" class="policko prazdne"></li>
            <li id="policko-3-1" class="policko prazdne"></li>
            <li id="policko-3-2" class="policko prazdne"></li>
            <li id="policko-3-3" class="policko prazdne"></li>
        </ul>
    </div>

    <div class="clearfix"></div>

    <script>
        var btnNovaHra = document.getElementById("btn-nova-hra");
        var policka = document.getElementsByClassName("policko");
        var aktualniSymbol = "kolecko";
        var konecHry = false;

        btnNovaHra.addEventListener('click', function (ev) {
            for (var i = 0; i < policka.length; i++) {
                policka[i].classList.remove('kolecko');
                policka[i].classList.remove('krizek');
                policka[i].classList.add('prazdne');
            }

            aktualniSymbol = "kolecko";
            konecHry = false;
            ev.preventDefault()
        });

        for (var i = 0; i < policka.length; i++) {
            policka[i].addEventListener('mouseover', function (ev) {
                if (konecHry) {
                    return;
                }

                if (ev.target.classList.contains('prazdne')) {
                    ev.target.classList.add(aktualniSymbol);
                }
            });

            policka[i].addEventListener('mouseout', function (ev) {
                if (ev.target.classList.contains('prazdne')) {
                    ev.target.classList.remove('kolecko');
                    ev.target.classList.remove('krizek');
                }
            });

            policka[i].addEventListener('click', function (ev) {
                if (konecHry) {
                    return;
                }

                if (ev.target.classList.contains('prazdne')) {
                    ev.target.classList.add(aktualniSymbol);
                    ev.target.classList.remove('prazdne');

                    if (aktualniSymbol == 'kolecko') {
                        aktualniSymbol = 'krizek'
                    } else {
                        aktualniSymbol = 'kolecko'
                    }

                    vyhodnotVyhru();
                }
            });
        }

        function vyhodnotVyhru() {
            var vyplneno = 0;
            var vyhodnoceni_kolecka = 0;
            var vyhodnoceni_krizky = 0;
            for (var y = 0; y < 3; y++) {
                for (var x = 0; x < 3; x++) {
                    var i = x + (y * 3)
                    if (policka[i].classList.contains('prazdne')) {
                        // nekontroluj prazdne pole
                    } else {
                        if (policka[i].classList.contains('kolecko')) {
                            vyhodnoceni_kolecka += Math.pow(2, i);
                        } else if (policka[i].classList.contains('krizek')) {
                            vyhodnoceni_krizky += Math.pow(2, i);
                        }

                        vyplneno++;
                    }

                    if (
                        (vyhodnoceni_kolecka & 7) == 7
                        || (vyhodnoceni_kolecka & 56) == 56
                        || (vyhodnoceni_kolecka & 448) == 448
                        || (vyhodnoceni_kolecka & 73) == 73
                        || (vyhodnoceni_kolecka & 146) == 146
                        || (vyhodnoceni_kolecka & 292) == 292
                        || (vyhodnoceni_kolecka & 273) == 273
                        || (vyhodnoceni_kolecka & 84) == 84
                    ) {
                        konecHry = true;
                        alert('vyhrála kolečka!');
                        return;
                    } else if (
                        (vyhodnoceni_krizky & 7) == 7
                        || (vyhodnoceni_krizky & 56) == 56
                        || (vyhodnoceni_krizky & 448) == 448
                        || (vyhodnoceni_krizky & 73) == 73
                        || (vyhodnoceni_krizky & 146) == 146
                        || (vyhodnoceni_krizky & 292) == 292
                        || (vyhodnoceni_krizky & 273) == 273
                        || (vyhodnoceni_krizky & 84) == 84

                    ) {
                        konecHry = true;
                        alert('vyhrály křížky!');
                        return;
                    }


                    if (vyplneno == 9) {
                        alert('remiza!');
                    }
                }
            }
        }
    </script>
@endsection

