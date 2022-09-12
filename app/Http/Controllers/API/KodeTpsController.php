<?php

namespace App\Http\Controllers\API;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\kode_tps;
use Illuminate\Http\Request;

class KodeTpsController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $kode_tps = kode_tps::all();

            if ($id) {
                return Response::success(
                    $kode_tps,
                    'data kode_tps berhasil di dapatkan'
                );
            } else {
                return Response::error(
                    null,
                    'data kode_tps tidak ditemukan',
                    404
                );
            }
        }

        $kode_tps = kode_tps::all();

        return Response::success(
            $kode_tps,
            'Data kode_tps berhasil di dapatkan'
        );
    }
}
