<?php

namespace App\Http\Controllers;
use App\Models\Trains;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Trains::all();
        $trainStart = Trains::select('azienda', 'orario_partenza', 'stazione_arrivo')
                            ->where('orario_partenza', '>', date('Y-m-d H:i:s'))
                            ->get();
        return view('home', compact('trains', 'trainStart'));
    }
}
