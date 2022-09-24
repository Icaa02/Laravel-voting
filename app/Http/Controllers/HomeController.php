<?php

namespace App\Http\Controllers;

use App\Models\Hasils;
use App\Models\Kandidats;
use GuzzleHttp\Promise\Each;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\each;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->Kandidats = new Kandidats();
        $this->Hasils = new Hasils();
    }
    public function index()
    {
        // $kandidat1 = Hasils::where('kandidat_id', '=', 1)->get();
        // $kandidat2 = Hasils::where('kandidat_id', '=', 2)->get();
        // $kandidat3 = Hasils::where('kandidat_id', '=', 3)->get();
        // $kandidat4 = Hasils::where('kandidat_id', '=', 4)->get();
        $countRow = Hasils::whereNotNull('kandidat_id')->get();
        $allKandidats = [];
        for ($i = 1; $i < $countRow->count(); $i++) {
            $hasil[$i] = Hasils::where('kandidat_id', '=', $i)->get()->count();
            $allKandidats[$i] = $hasil[$i];
        }
        $data = [
            'landing' => $this->Kandidats->AllData(),
            'allKandidats' => $allKandidats
        ];
        // $data = DB::table('kandidats')->pluck('nama_kandidat');
        // foreach ($data as $kandidats);
        // $data = DB::table('hasils')
        //     ->latest()
        //     ->first();
        // $nama_kandidat = Kandidats::select(DB::raw('nama_kandidat'))->pluck('nama_kandidat');


        // return view('landing', $data);
        return view('landing', $data);
    }
}
