<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaketRequest;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();

        return view('admin.pages.paket.index', ['paket' => $paket]);
    }

    public function post(PaketRequest $request)
    {
        $data = $request->all(); 
        $data['deskripsi'] = $request->summernote;

        Paket::create($data);

        return redirect()->route('paket.index');
    }

    public function delete($id)
    {
        $data = Paket::findOrFail($id);
        $data->delete();

        return redirect()->route('paket.index');
    }
}
