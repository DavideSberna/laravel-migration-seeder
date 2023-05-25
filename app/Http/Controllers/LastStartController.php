<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Trains;
use Illuminate\Http\Request;

class LastStartController extends Controller
{
    public function index(){
        $lastStart = Trains::select('azienda', 'orario_partenza', 'stazione_arrivo')
                    ->whereTime('orario_partenza', '>', DB::raw('CURRENT_TIME()'))
                    ->get();

        return view('lastStart', compact('lastStart'));
    }
}
