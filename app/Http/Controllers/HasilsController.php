<?php

namespace App\Http\Controllers;

use App\Models\Hasils;
use App\Models\Kandidats;
use App\Models\Pemilihs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HasilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Hasils::all();

        if (request()->ajax()) {
            // $query = Hasils::all();

            return DataTables::of($query)
                ->editColumn('nama_kandidat', function ($item) {
                    $kandidat = Kandidats::find($item->kandidat_id);
                    return '<div class="content-center"> ' . $kandidat->nama_kandidat . '  </div>';
                })
                ->editColumn('id_nfc', function ($item) {
                    $pemilih = Pemilihs::find($item->pemilih_id);
                    return '<div class="content-center"> ' . $pemilih->id_nfc . '  </div>';
                })
                ->editColumn('no_urut', function ($item) {
                    $kandidat = Kandidats::find($item->kandidat_id);
                    return '<div class="content-center"> ' . $kandidat->no_urut . '  </div>';
                })
                ->rawColumns(['action', 'nama_kandidat', 'id_nfc', 'no_urut'])
                ->make();
        }

        return view('pages.dashboard.hasils.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kandidats = Kandidats::all();
        $pemilhs = Pemilihs::all();
        return view('pages.dashboard.hasils.create', [
            'kandidats' => $kandidats,
            'pemilihs' => $pemilhs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Hasils::create($data);
        return redirect()->route('dashboard.hasils.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
