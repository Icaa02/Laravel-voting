<?php

namespace App\Http\Controllers;

use App\Models\Hasils;
use App\Models\Kandidats;
use App\Models\Pemilihs;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        $users = User::all();
        $kandidat = Kandidats::all();
        //$kandidat1 = Hasils::where('id_kandidat', 1);
        $pemilih = Pemilihs::all();
        $hasil = Hasils::all();
        return view('pages.dashboard.index', compact(['users', 'kandidat', 'pemilih', 'hasil']));
    }
}
