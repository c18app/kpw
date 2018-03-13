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

        Mail::send('workshop.confirm', [], function($message) use ($validatedData) {
            $message->to($validatedData['email'], $validatedData['name'])
                ->bcc('mnosavcov@gmail.com', 'Michal Nosavcov')
                ->subject('Přihláška na seminář')
                ->from('kpw@mail.kpw.cz','KPW (Kurz Programování Webu)');
        });

        WorkshopParticipant::create($validatedData);

        return redirect()->route('workshop.terms')->with('notice', 'Děkuji za Vaši registraci, brzy se Vám ozvu s dalšími informacemi');
    }
}