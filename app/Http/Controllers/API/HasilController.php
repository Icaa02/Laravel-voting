<?php

namespace App\Http\Controllers\API;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\Hasils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HasilController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $hasil = Hasils::with(['kandidats', 'pemilihs'])->find($id);

            if ($id) {
                return Response::success(
                    $hasil,
                    'data hasil berhasil di dapatkan'
                );
            } else {
                return Response::error(
                    null,
                    'data hasil tidak ditemukan',
                    404
                );
            }
        }

        $hasil = Hasils::all();

        return Response::success(
            $hasil,
            'Data hasil berhasil di dapatkan'
        );
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'kandidat_id' => 'required',
            'pemilih_id' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::error(
                null,
                'salah masukkan data',
                404
            );
        }
        $hasils = Hasils::create($input);
        return Response::success(
            $hasils,
            'Berhasil Menambahkan Hasil'
        );
    }
}
