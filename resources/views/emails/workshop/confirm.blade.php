@component('emails.message')
# Přihláška na Kurz Programování Webu

Děkuji za Vaši přihlášku na kurz, který se koná:<br>
{{ \Carbon\Carbon::parse($kurz->beginning)->format('d.m.Y') }} od: {{ \Carbon\Carbon::parse($kurz->beginning)->format('H:i') }} do: {{ \Carbon\Carbon::parse($kurz->finish)->format('H:i') }}<br>
<br>
Adresa:<br>
Základní škola a Střední škola<br>
Kupeckého 576<br>
149 00 Praha 4<br>
<br>
platbu prosím zašlete na č.ú.: 2301045287/2010<br>
VS: vaše telefonní číslo<br>
@if(in_array($kurz->id, [3,4]))
částka: 2.290,- Kč<br>
@else
částka: 2.790,- Kč<br>
@endif
<br>
Děkuji,<br>
Michal Nosavcov<br>
tel: 603 323 878
@endcomponent