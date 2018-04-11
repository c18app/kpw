@component('emails.message')
# Registrace k affiliate

Děkuji za Vaši registraci k affiliate:<br>
<br>
Váš affiliate kód: {{ $affiliate->code }}<br>
<br>
Odkaz pro Vaše affiliate:<br>
{{ route('homepage').'?a='.$affiliate->code }}<br>
<br>
<br>
<strong>Přístupové údaje k Vašemu affiliate:</strong><br>
Přihlašovací stránka: {{ route('affiliate.account') }}<br>
Heslo: {{ $pass }}<br>
<br>
Děkuji,<br>
Michal Nosavcov<br>
tel: 603 323 878
@endcomponent