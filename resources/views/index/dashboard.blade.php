@extends(Config('cmsx.app.template').'::layouts.main')

@section('content')
    <h1>Dashboard</h1>

    <h2>Účastníci ({{ $ucastnici_count }})</h2>
    <table>
    @foreach($ucastnici as $ucastnik)
        <tr>
            <td style="padding-right: 25px;">{{ $ucastnik->created_at->format('d.m.Y H:i') }}</td>
            <td style="padding-right: 25px;">{{ $ucastnik->name }}</td>
            <td style="padding-right: 25px;">{{ $ucastnik->email }}</td>
            <td style="padding-right: 25px;">{{ $ucastnik->phone }}</td>
            <td>{{ $ucastnik->affiliate_code }}</td>
        </tr>
    @endforeach
    </table>

    <h2>Affiliates ({{ $affiliates_count }})</h2>
    <table>
        @foreach($affiliates as $affiliate)
            <tr>
                <td style="padding-right: 25px;">{{ $affiliate->created_at->format('d.m.Y H:i') }}</td>
                <td style="padding-right: 25px;">{{ $affiliate->code }}</td>
                <td style="padding-right: 25px;">{{ $affiliate->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection

