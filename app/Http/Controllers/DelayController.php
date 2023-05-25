<?php

namespace App\Http\Controllers;
use App\Models\Trains;
use Illuminate\Http\Request;

class DelayController extends Controller
{
    public function index(){
        $delayCount = Trains::where('in_orario', false)->count();
        $deleteCount = Trains::where('in_orario', false)
        ->where('cancellato', true)
        ->count();
        $totalTrain = Trains::select('azienda')->count();

        $delayTrain = Trains::select('azienda', 'orario_partenza', 'stazione_arrivo', 'numero_carrozze', 'prezzo', 'in_orario')
        ->where('in_orario', false)
        ->get();

        return view('delay' , compact('delayTrain', 'deleteCount', 'delayCount', 'totalTrain') );
    }
}
