<?php

namespace App\Http\Controllers;

use App\Models\Hasils;
use App\Models\Kandidats;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kandidat1 = Hasils::where('kandidat_id', '=', 1)->get();
        $kandidat2 = Hasils::where('kandidat_id', '=', 2)->get();
        $kandidat3 = Hasils::where('kandidat_id', '=', 3)->get();
        return view('landing', compact(['kandidat1', 'kandidat2', 'kandidat3']));
        //     $users = User::all();
        //     $kandidat = Kandidats::all();
        //     //$kandidat1 = Hasils::where('id_kandidat', 1);
        //     $pemilih = Pemilihs::all();
        //     $hasil = Hasils::all();
        //     return view('pages.dashboard.index', compact(['users', 'kandidat', 'pemilih', 'hasil']));
    }
}
