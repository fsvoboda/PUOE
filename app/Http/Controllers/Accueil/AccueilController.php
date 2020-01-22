<?php

namespace App\Http\Controllers\Accueil;

use App\Models\Param;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
    public function Accueil()
    {
        $param=Param::where('type','accueil')->get();
        //$param=Param::all();

        return view('Accueil.accueil');
    }
}
