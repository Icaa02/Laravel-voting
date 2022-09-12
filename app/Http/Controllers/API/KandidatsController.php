<?php

namespace App\Http\Controllers\API;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\Kandidats;
use Illuminate\Http\Request;

class KandidatsController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');

        if ($id) {
            $kandidat = Kandidats::all();

            if ($id) {
                return Response::success(
                    $kandidat,
                    'data kandidat berhasil di dapatkan'
                );
            } else {
                return Response::error(
                    null,
                    'data kandidat tidak ditemukan',
                    404
                );
            }
        }

        $kandidat = Kandidats::all();

        return Response::success(
            $kandidat,
            'Data kandidat berhasil di dapatkan'
        );
    }
}
