<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = User::all();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="space-x-4 flex w-full">
                        <a class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline" 
                            href="' . route('dashboard.user.edit', $item->id)  . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.user.destroy', $item->id) . '" method="POST">
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

        return view('pages.dashboard.user.index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('pages.dashboard.user.edit', [
            'user' => $user
        ]);
    }

    public function update(UserRequest $userRequest, $id)
    {
        $data = $userRequest->all();

        $user = User::find($id);
        $user->update($data);

        return redirect()->route('dashboard.user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('dashboard.user.index');
    }
}
