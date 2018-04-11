<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Affiliate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WorkshopConfirm;
use App\Mailing;

class AffiliateController extends Controller
{
    public function index()
    {
        return view('affiliate.index');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'confirm' => 'accepted',
        ], [
            'email.required' => 'pole "Email" je povinné',
            'email.email' => 'pole "Email" musí mít validní formát pro email',
            'confirm.accepted' => 'musíte souhlasit se spracováním osobních údajů',
        ]);

        if(Affiliate::where('email', $validatedData['email'])->count()) {
            return redirect()->route('affiliate.index')->with('error', 'Zadaný email je již k affiliate zaregistrovaný')->withInput();
        }

        $i = 0;
        do {
            $code = sha1(uniqid(microtime(true), true));
            $validatedData['code'] = substr($code, 0, 10);
        } while (Affiliate::where('code', $validatedData['code'])->count());

        $pass = substr($code, -8);
        $validatedData['password'] = bcrypt($pass);

        Affiliate::create($validatedData);

        return redirect()->route('affiliate.index')->with('confirm', 'Děkuji za Vaši registraci.');
    }
}