<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaketRequest;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('admin.pages.paket.index');
    }

    public function post(PaketRequest $request)
    {
        $data = $request->all(); 
        $data['deskripsi'] = $request->summernote;

        Paket::create($data);

        return redirect()->route('paket.index');
    }
}
