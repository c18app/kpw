@extends(Config('cmsx.app.template').'::layouts.main')

@section('content')
    <h1>Affiliate</h1>
    <p>
        Po zaregistrování k affiliate programu Vám bude na email zaslán odkaz z Vaším affilate kódem. Pokud se někdo
        přihlásí na kurz přes tento odkaz, bude Vám po zaplacení kurzovného vyplacena <strong style="color: #ee4445;">odměna
            20%</strong>.
    </p>
    <p>
        Pokud přijde uživatel pomocí Vašeho affiliate odkazu, pak má kód <strong style="color: #ee4445;">platnost 1.
            rok</strong>. To zmanená, že pokud se uživatel
        zaregistruje kdykoli v průběhu roku od první návštěvy přes Váš odkaz, pak Vám stále patří odměna, a to i
        případě,
        že už Váš odkaz nebyl pro tuto registraci použitý (prohlížeč si jej pamatuje).
    </p>

    <div>
    @include(Config('cmsx.app.template').'::flash')
    </div>

    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="red">Váš e-mail</label>
            <input type="email" name="email" class="form-control input-text" value="{{ old('email') }}">
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="confirm" value="on" {{ old('confirm') ? 'checked="checked"' : '' }}>
                Odesláním souhlasím se <a href="{{ \C18app\Cmsx\Models\Page::firstOrNew(['id' => 18])->getUrl() }}"
                                          target="_blank" class="ochrana">zpracováním osobních údajů</a> a s níže
                uvedenými podmínkami
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-red">Zaregistrovat se k affiliate</button>
        </div>
    </form>
    <p>
    <h2>Podmínky pro registraci k affiliate</h2>
    <ol>
        <li>
            Po zaregistrování dostanete email s affiliate kódem, který bude sloužit jako součást odkazu vedoucího na web
            a který umožní identifikovat, že uživatel přišel pomoví Vašeho odkazu
        </li>
        <li>
            Součástí emailu s affiliate kódem Vám budou zaslány přístupové údaje, k Vašemu affiliate účtu, kde můžete
            sledovat statistiky přístupů a registrací přes Váš affiliate kód.
        </li>
        <li>
            Výše odměny za doporučeného účastníka, který se zaregistruje a řádně zaplatí poplatek za kurz, je Vaše
            odměna ve výši 20%.
        </li>
        <li>
            Odměny si můžete nechat kdykoli vyplatit, maximálně však jednou za týden.
        </li>
        <li>
            Doba pamatování Vašeho affiliate kódu je 365 dní od posledního proklinutí na Váš affiliate odkaz.
        </li>
        <li>
            Nebudou Vám poskytovány údaje o účastnících, dostanete jen informace o počtech účastníků, kteří se
            přihlásili pomocí Vaše affiliate kódu.
        </li>
        <li>
            Provozovatel nenese žádnou zodpovědnost za zneužití Vašich přístupových údajů k affiliate účtu. Přístupové
            údaje si dobře uchovejte v soukromí a niko je nepředávejte.
        </li>
        <li>
            Affiliate můžete ukončit, kdykoli se rozhodnete.
        </li>
        <li>
            Provozovatel si vyhrazuje právo změnit podmínky pro využití affiliate. Jakékoli změny budou minimálně 2
            měsíce předem oznámeny.
        </li>
    </ol>
    </p>
@endsection

