<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employe;
use Illuminate\Support\Facades\DB;

class StatController extends Controller
{
    //view vers stat
  
    public function total(Request $request)
    {
        $totalEmploye = DB::table('employes')->count();
        $totalCdi = DB::table('employes')->where('status','=','CDI')->count();
        $totalCdd = DB::table('employes')->where('status','=','CDD')->count();
        $totalStagiaire = DB::table('employes')->where('status','=','stagiaire')->count();
        $totalUsers = DB::table('users')->count();
        $totalConges = DB::table('conges')->count();

        return view('dashboard', compact('totalEmploye','totalCdi','totalCdd',
        'totalStagiaire','totalUsers','totalConges'));
    }
    
}
