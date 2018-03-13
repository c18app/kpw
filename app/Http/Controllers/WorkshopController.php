<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\WorkshopParticipant;
use App\WorkshopTerm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function terms(Request $request, WorkshopTerm $workshop_term = null)
    {
        $terms = WorkshopTerm::where('finish', '>', \Carbon\Carbon::now())->get();
        return view('workshop.terms', ['terms' => $terms, 'register' => $workshop_term]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'workshop_term_id' => 'required|integer',
        ], [
            'name.required' => 'pole "Jméno a příjmení" je povinné',
            'email.required' => 'pole "Email" je povinné',
            'email.email' => 'pole "Email" musí mít validní formát pro email',
            'phone.required' => 'pole "Telefonní číslo" je povinné',
        ]);

        WorkshopParticipant::create($validatedData);

        try {
            Mail::send('xworkshop.confirm', [], function ($message) use ($validatedData) {
                $message->to($validatedData['email'], $validatedData['name']);
                $message->bcc('mnosavcov@gmail.com', 'Michal Nosavcov');
                $message->subject('Přihláška na seminář');
                $message->from('kpw@kpw.cz', 'KPW (Kurz Programování Webu)');
            });
        } catch (\Exception $e) {
            return redirect()->route('workshop.terms')->with('notice', 'Děkuji za Vaši registraci. Registrace proběhla úspěšně, ale potvrzovací email se nepodařilo odeslat! Budu Vás co nejdříve kontaktovat.');
        }

        return redirect()->route('workshop.terms')->with('notice', 'Děkuji za Vaši registraci, Na Váš email byla odeslána zpráva s potvrzením. V případě jakýchkoli dotazů se na mě prosím obraťte.');
    }
}