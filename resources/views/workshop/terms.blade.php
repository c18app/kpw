@extends('cmsx::layouts.frontend')



@section('content')
    @if (session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
    @endif

    <h1>Termíny kurzů</h1>
    <a href="{{ route('homepage') }}">Informace o kurzu</a>

    <table>
        @forelse ($terms as $term)
            <tr>
                <td>{{ \Carbon\Carbon::parse($term->beginning)->format('d.m.Y H:i') }}
                    - {{ \Carbon\Carbon::parse($term->finish)->format('d.m.Y H:i') }}</td>
                <td style="padding-left: 50px;"><a href="{{ route('workshop.terms', ['workshop_term' => $term->id]) }}"
                                                   class="btn btn-success btn-sm">přihlásit se</a></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
        @empty
            <tr>
                <td>v současné chvíli nejsou žádné vypsané termíny.</td>
            </tr>
        @endforelse
    </table>

    @isset($register)
        <p>
            <br><br><br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2>Registrace na kurz základy programování webu</h2>
        <h3>(základní znalosti o programování webu)</h3>
        </p>
        <p>
            termín: {{ \Carbon\Carbon::parse($register->beginning)->format('d.m.Y H:i') }}
            - {{ \Carbon\Carbon::parse($register->finish)->format('d.m.Y H:i') }}
        </p>
        <form action="{{ route('workshop.register') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="workshop_term_id" value="{{ $register->id }}">
            <div class="form-group">
                <label>Jméno a příjmení *</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label>Telefonní číslo *</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="checkbox">
                <label>

                    <input type="checkbox" name="confirm" value="on" {{ old('confirm') ? 'checked="checked"' : '' }}> Souhlasím se zpracováním osobních údajů * <a href="{{ \C18app\Cmsx\Models\Page::firstOrNew(['id' => 18])->getUrl() }}" target="_blank">Ochrana osobních údajů</a>
                </label>
            </div>
            <div>* Položky s hvězdičkou je nutné v přihlášce vyplnit.</div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrovat</button>
            </div>
        </form>
    @endisset

@endsection