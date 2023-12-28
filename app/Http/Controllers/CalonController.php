<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonController extends Controller
{
    public function index()
    {
        // return view('admin.pages.calon.index');
        return view('admin.pages.master.master');
    }
}
