@component('emails.message')
# Přihláška na seminář Kurz Programování Webu

Děkuji za Vaši přihlášku na seminář, který se koná:<br>
{{ \Carbon\Carbon::parse($seminar->beginning)->format('d.m.Y') }} od: {{ \Carbon\Carbon::parse($seminar->beginning)->format('H:i') }} do: {{ \Carbon\Carbon::parse($seminar->finish)->format('H:i') }}<br>
<br>
Adresa:<br>
Základní škola a Střední škola<br>
Kupeckého 576<br>
149 00 Praha 4<br>
<br>
platbu prosím zašlete na č.ú.: 2301045287/2010<br>
VS: vaše telefonní číslo<br>
částka: 2.790,- Kč<br>
<br>
Děkuji,<br>
Michal Nosavcov<br>
tel: 603 323 878
@endcomponent