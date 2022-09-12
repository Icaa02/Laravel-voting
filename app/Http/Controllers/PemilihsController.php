<?php

namespace App\Http\Controllers;

use App\Models\kode_tps;
use App\Models\Pemilihs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PemilihsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Pemilihs::all();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="space-x-4 flex w-full">
                        <a class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline" 
                            href=" ' . route('dashboard.pemilihs.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.pemilihs.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-700 bg-red-700 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-800 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.pemilihs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode_tps = kode_tps::all();
        return view('pages.dashboard.pemilihs.create', [
            'kode_tps' => $kode_tps
        ]);
        // $kode_tps = kode_tps::all();
        // $pemilhs = Pemilihs::all();
        // return view('pages.dashboard.tps.create', [
        //     'kode_tps' => $kode_tps,
        //     'pemilihs' => $pemilhs
        // ]);
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
        Pemilihs::create($data);

        return redirect()->route('dashboard.pemilihs.index');
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
        $pemilihs = Pemilihs::find($id);
        return view('pages.dashboard.pemilihs.edit', [
            'item' => $pemilihs,
        ]);
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
        $data = $request->all();

        $pemilihs = Pemilihs::find($id);
        $pemilihs->update($data);

        return redirect()->route('dashboard.pemilihs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemilihs = Pemilihs::find($id);

        $pemilihs->delete();

        return redirect()->route('dashboard.pemilihs.index');
    }
}
