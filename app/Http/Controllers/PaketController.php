<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaketRequest;
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
        
        dd($data);
    }
}
