@extends(Config('cmsx.app.template').'::layouts.main')

@section('content-title', 'Davinci#1 / 01 / příklad #1')
@section('content-title-hp', 'Davinci#1 / 01 / příklad #1')

@section('content')
    <style>
        .cerveny-text {
            color: #f00;
        }

        .bily-text {
            color: #fff;
        }

        .cerne-pozadi {
            background-color: #000;
        }

        .podtrzeny-text {
            text-decoration: underline;
        }

        .velky-text {
            font-size: 32px;
        }

        .tucny-text {
            font-weight: bold;
        }

        .kosticky {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .kosticky li {
            float: left;
            width: 50px;
            height: 50px;
            background-image: none!important;
        }

        .zakulacene-rohy {
            border-radius: 25%;
        }

        .kulate-rohy {
            border-radius: 50%;
        }
    </style>

    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>

    <h1>Příklad #1</h1>

    <h2>Ukázka základních stylů</h2>

    <p>text bez stylů</p>

    <p class="cerveny-text podtrzeny-text">červený podtržený text</p>

    <p class="cerne-pozadi bily-text">bílý text na černém pozadí</p>

    <p class="velky-text">velký text</p>

    <p class="tucny-text cerveny-text">tučný červený text</p>

    <ul class="kosticky">
        <li style="background-color: #000"></li>
        <li style="background-color: #f00"></li>
        <li style="background-color: #0f0"></li>
        <li style="background-color: #00f"></li>
        <li style="background-color: #ff0"></li>
        <li style="background-color: #f0f"></li>
        <li style="background-color: #0ff"></li>
        <li style="background-color: #fff; border: 1px solid #000;"></li>
    </ul>

    <div style="position: relative; width: 50%;">
        <img src="https://blog.inpage.cz/obrazek/3/kitten-jpg/" style="width: 100%; margin-top: 25px;">
        <div style="position: absolute; width: 50%; height: 50%; background-color: rgba(0,0,0,0.5); right: 0; bottom: 0; text-align: center; line-height: 2;"
             class="bily-text">
            <br><br>absolutně pozicovaný prvek<br>s poloprůhledným pozadím
        </div>
    </div>

    <br>

    <div class="cerne-pozadi zakulacene-rohy" style="width: 100px; height: 100px; display: inline-block;"></div>
    <div class="cerne-pozadi kulate-rohy" style="width: 100px; height: 100px; display: inline-block;"></div>

    <div style="clear: both;"></div>
    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>
    <br>
    <br>

    <div style="clear: both;"></div>
    <pre>{{
    htmlentities('<style>
  .cerveny-text {
    color: #f00;
  }

  .bily-text {
    color: #fff;
  }

  .cerne-pozadi {
    background-color: #000;
  }

  .podtrzeny-text {
    text-decoration: underline;
  }

  .velky-text {
    font-size: 32px;
  }

  .tucny-text {
    font-weight: bold;
  }

  .kosticky {
    margin: 0;
    padding: 0;
    list-style-type: none;
  }

  .kosticky li {
    float: left;
    width: 50px;
    height: 50px;
    background-image: none!important;
  }

  .zakulacene-rohy {
    border-radius: 25%;
  }

  .kulate-rohy {
    border-radius: 50%;
  }
</style>


<p>text bez stylů</p>

<p class="cerveny-text podtrzeny-text">červený podtržený text</p>

<p class="cerne-pozadi bily-text">bílý text na černém pozadí</p>

<p class="velky-text">velký text</p>

<p class="tucny-text cerveny-text">tučný červený text</p>

<ul class="kosticky">
  <li style="background-color: #000"></li>
  <li style="background-color: #f00"></li>
  <li style="background-color: #0f0"></li>
  <li style="background-color: #00f"></li>
  <li style="background-color: #ff0"></li>
  <li style="background-color: #f0f"></li>
  <li style="background-color: #0ff"></li>
  <li style="background-color: #fff; border: 1px solid #000;"></li>
</ul>

<div style="position: relative; width: 50%;">
  <img src="https://blog.inpage.cz/obrazek/3/kitten-jpg/" style="width: 100%; margin-top: 25px;">
  <div style="position: absolute; width: 50%; height: 50%; background-color: rgba(0,0,0,0.5); right: 0; bottom: 0; text-align: center; line-height: 2;" class="bily-text">
     <br>
     <br>
     absolutně pozicovaný prvek
     <br>
     s poloprůhledným pozadím
  </div>
</div>

<br>

<div class="cerne-pozadi zakulacene-rohy" style="width: 100px; height: 100px; display: inline-block;"></div>
<div class="cerne-pozadi kulate-rohy" style="width: 100px; height: 100px; display: inline-block;"></div>
')

}}</pre>

    <a href="/kurz/davinci/e3b777/01/01" style="float: right;">zpět</a>

@endsection

