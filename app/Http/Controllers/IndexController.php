<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\WorkshopParticipant;
use App\Affiliate;
use App\WorkshopTerm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WorkshopConfirm;
use App\Mailing;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'C18app\Cmsx\Middleware\Admin'
        ]);
    }

    public function dashboard() {
        $ucastnici = WorkshopParticipant::orderBy('id', 'desc')->limit(10)->get();
        $affiliates = Affiliate::orderBy('id', 'desc')->limit(10)->get();
        return view('index.dashboard', [
            'ucastnici' => $ucastnici,
            'affiliates' => $affiliates,
            'ucastnici_count' => WorkshopParticipant::count(),
            'affiliates_count' => Affiliate::count(),
        ]);
    }
}