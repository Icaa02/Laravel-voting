<?php

namespace App\Http\Controllers;

use App\Models\Kandidats;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KandidatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Kandidats::all();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="space-x-4 flex w-full">
                        <a class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline" 
                            href="' . route('dashboard.kandidats.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.kandidats.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-700 bg-red-700 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-800 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    </div>
                    ';
                })
                ->editColumn('url', function ($item) {
                    return '
                    <img class="mx-auto" style="max-width: 150px;" src="' . asset('storage/' . $item->url) . '" />';
                })
                ->rawColumns(['action', 'url'])
                ->make();
        }

        return view('pages.dashboard.kandidats.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.kandidats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('files');

        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $path = $file->store('public/gallery');

                Kandidats::create([
                    'nama_kandidat' => $request->nama_kandidat,
                    'no_urut' => $request->no_urut,
                    'visi_misi' => $request->visi_misi,
                    'url' => $path,
                ]);
            }
        }

        return redirect()->route('dashboard.kandidats.index');
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
        $kandidats = Kandidats::find($id);
        return view('pages.dashboard.kandidats.edit', [
            'item' => $kandidats,
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

        $kandidats = Kandidats::find($id);
        $kandidats->update($data);

        return redirect()->route('dashboard.kandidats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kandidats = Kandidats::find($id);

        $kandidats->delete();

        return redirect()->route('dashboard.kandidats.index');
    }
}
