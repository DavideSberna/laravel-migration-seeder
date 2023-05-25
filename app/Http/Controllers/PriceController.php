<?php

namespace App\Http\Controllers;
use App\Models\Trains;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        $priceTrain = Trains::select('azienda', 'orario_partenza', 'stazione_arrivo', 'prezzo')
                            ->orderBy('prezzo', 'asc')
                            ->get();

        return view('price', compact('priceTrain'));
    }
}
