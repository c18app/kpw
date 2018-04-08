<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\WorkshopParticipant;
use App\WorkshopTerm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WorkshopConfirm;
use App\Mailing;

class WorkshopController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'workshop_term_id' => 'required|integer',
            'confirm' => 'accepted',
        ], [
            'name.required' => 'pole "Jméno a příjmení" je povinné',
            'email.required' => 'pole "Email" je povinné',
            'email.email' => 'pole "Email" musí mít validní formát pro email',
            'phone.required' => 'pole "Telefonní číslo" je povinné',
            'confirm.accepted' => 'musíte souhlasit se spracováním osobních údajů',
        ]);

        WorkshopParticipant::create($validatedData);

        try {
            $kurz = WorkshopTerm::find($validatedData['workshop_term_id']);

            Mail::to($validatedData['email'], $validatedData['name'])
                ->bcc('mnosavcov@gmail.com', 'Michal Nosavcov')
                ->send(new WorkshopConfirm($kurz));
        } catch (\Exception $e) {
            die($e->getMessage());
            return redirect()->route('homepage')->with('error', 'Děkuji za Vaši registraci. Registrace proběhla úspěšně, ale potvrzovací email se nepodařilo odeslat! Budu Vás co nejdříve kontaktovat.');
        }

        return redirect()->route('homepage')->with('confirm', 'Děkuji za Vaši registraci, Na Váš email byla odeslána zpráva s potvrzením. V případě jakýchkoli dotazů se na mě prosím obraťte.');
    }

    public function newsletter(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'pole "Email" je povinné',
            'email.email' => 'pole "Email" musí mít validní formát pro email',
        ]);

        Mailing::create($validatedData);

        return redirect()->route('homepage')->with('confirm', 'Děkuji za Váš zájem o zasílání tipů.');
        var_dump($request->all());
        die();
    }
}