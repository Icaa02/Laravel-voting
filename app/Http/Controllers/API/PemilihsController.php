<?php

namespace App\Http\Controllers\API;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\Pemilihs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemilihsController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $pemilih = Pemilihs::all();

            if ($id) {
                return Response::success(
                    $pemilih,
                    'data pemilih berhasil di dapatkan'
                );
            } else {
                return Response::error(
                    null,
                    'data pemilih tidak ditemukan',
                    404
                );
            }
        }

        $pemilih = Pemilihs::all();

        return Response::success(
            $pemilih,
            'Data pemilih berhasil di dapatkan'
        );
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_nfc' => 'required',
            'nama_pemilih' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'no_tps' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::error(
                null,
                'salah masukkan data',
                404
            );
        }
        $pemilihs = Pemilihs::create($input);
        return Response::success(
            $pemilihs,
            'Berhasil Menambahkan Pemilih'
        );
    }
}
