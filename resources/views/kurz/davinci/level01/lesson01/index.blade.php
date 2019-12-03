@extends(Config('cmsx.app.template').'::layouts.main')

@section('content-title', 'Davinci#1 / 01')
@section('content-title-hp', 'Davinci#1 / 01')

@section('content')
    <style>
        .monospace {
            font-family: Menlo, Monaco, Consolas, Courier New, monospace;
            background-color: #f7f3db;
            color: #333;
        }
    </style>

    <h1>Lekce #1</h1>

    <h2>HTML - Hypertext Markup Language</h2>

    <p>
        Jedná se o značkovací jazyk používaný pro tvorbu webových stránek, které jsou propojeny hypertextovými odkazy.
        HTML je hlavním z jazyků pro vytváření stránek v systému World Wide Web, který umožňuje publikaci dokumentů na
        Internetu.
    </p>

    <p>
        <strong>HTML tagy:</strong> <a href="https://www.w3schools.com/tags/" target="_blank">https://www.w3schools.com/tags/</a>
    </p>

    <p>
        <strong>HTML tutoriál:</strong> <a href="https://www.w3schools.com/html/default.asp" target="_blank">https://www.w3schools.com/html/default.asp</a>
    </p>

    <p>
        <strong>tag (prvek, element):</strong> je základní jednotka značkovacího jazyka HTML. Tagy jsou párové a
        nepárové. Mohou obsahovat atributy s hodnotami.<br>
        Příklad: <span style="font-style: italic;">
            {{ htmlentities('<element atribut=”hodnota” atribut2=”hodnota2”>...</element>') }}
        </span>
    </p>

    <p>
        <strong>základní typy zobrazení prvků</strong>: block, inline, inline-block + ještě velká spousta dalších, ty si
        necháme na později
    </p>

    <p>
        <strong>základní HTML struktura:</strong>
    </p>

    <pre>{{
    htmlentities('<!DOCTYPE html>
<html lang="cs">
<head>
  <title>Ahoj!</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- import the webpage\'s stylesheet -->
  <link rel="stylesheet" href="/style.css">

  <!-- import the webpage\'s javascript file -->
  <script src="/script.js" defer></script>
</head>
<body>
  <h1>Ahoj světe!</h1>

  <p>
    Jsem tvoje první webová stránka.
  </p>
</body>
</html>')
}}</pre>

    <p>
        <strong>HTML online editor</strong>: <a href="https://glitch.com/" target="_blank">https://glitch.com/</a>
    </p>
    <p>
        <strong>doporučená literatura</strong>: HTML5 okamžitě (computer press)
    </p>

    <hr>

    <h2>CSS - Cascading Style Sheets</h2>

    <p>
        jazyk pro popis způsobu zobrazení elementů na stránkách napsaných v jazycích HTML
    </p>

    <p>
        <strong>CSS tutoriál</strong>: <a href="https://www.w3schools.com/css/" target="_blank">https://www.w3schools.com/css/</a>
    </p>

    <strong>selektory</strong>:
    <ul style="line-height: 1.5">
        <li>
            <strong>*</strong> - tyto deklarace budou platit pro všechny elementy
        </li>
        <li>
            <strong>body</strong> - tyto deklarace budou
            platit pro všechny výskyty elementu <span class="monospace">&lt;body&gt;</span>
        </li>
        <li>
            <strong>body p</strong> - tyto deklarace budou platit pro všechny elementy <span
                    class="monospace">&lt;p&gt;</span>, které se nachází v elementu <span
                    class="monospace">&lt;body&gt;</span>, v jakékoliv
            hloubce
        </li>
        <li>
            <strong>body&gtdiv</strong> – tyto deklarace budou platit pro všechny elementy <span class="monospace">&lt;div&gt;</span>,
            které jsou potomky elementu <span class="monospace">&lt;body&gt;</span>.
            To znamená, že pokud bychom měli element <span class="monospace">&lt;div&gt;</span>, který se nachází v
            <span class="monospace">&lt;body&gt;&lt;blockquote&gt;&lt;div&gt;…</span>, tyto deklarace by pro něj
            neplatily, protože tento <span class="monospace">&lt;div&gt;</span> není přímým potomkem elementu <span
                    class="monospace">&lt;body&gt;</span>
        </li>
        <li>
            <strong>.trida</strong> - tyto deklarace budou platit pro všechny elementy, které mají v HTML nastavenou
            třídu trida. To se
            provádí pomocí HTML atributu <span class="monospace">class</span>
        </li>
        <li>
            <strong>#id</strong> - tyto deklarace budou platit pro všechny elementy, které mají v HTML nastavený
            identifikátor id. To se
            provádí pomocí HTML atributu <span class="monospace">id</span>
        </li>
        <li>
            <strong>:hover</strong> - tyto deklarace budou platit pro odkazy na kterých stojí ukazatel myši
        </li>
        <li>
            <strong>sel1, sel2, sel3</strong> - selektory můžeme seskupovat pomocí čárek. Následující deklarace pak
            budou platit pro
            všechny selektory
        </li>
        <li>
            …a další, na ty se podíváme později
        </li>
    </ul>

    <p>
        <strong>připojení kaskádových stylů do HTML stránky:</strong>
    </p>
    <ul>
        <li>
            <strong>pomocí elementu style</strong>
            <pre>&lt;style type="text/css"&gt;
#hlavicka {
  width: 200px;
  height: 450px;
}
&lt;/style&gt;</pre>
        </li>

        <li>
            připojení externího souboru pomocí elementu link
            <pre>&lt;head&gt;
  ...
  &lt;link rel='stylesheet' href='styly.css' type='text/css'&gt;
  ...
&lt;/head&gt;</pre>
        </li>

        <li>
            inline zápisem stylu pomocí atributu style
            <pre>&lt;p style="color: red; text-decoration: underline"&gt;
  Tento odstavec bude červený a podtržený.
&lt;/p&gt;</pre>
        </li>
    </ul>



    <p>
        <strong>doporučená literatura</strong>: CSS okamžitě (computer press)
    </p>

    <hr>

    <h2>Příklady</h2>

    <ul style="line-height: 2;">
        <li><a href="/kurz/davinci/485f74/01/01/01">Příklad #1</a></li>
        <li><a href="/kurz/davinci/75edf5/01/01/02">Příklad #2</a></li>
    </ul>
@endsection

