<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalonRequest;
use App\Models\Calon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CalonController extends Controller
{
    public function index()
    {
        // $this->generate();
        $generate = Str::random(4);
        $enkrip = Hash::make($generate);

        $data = Calon::all();

        return view('admin.pages.calon.index',['generate' => $generate, 'enkrip' => $enkrip,'data' => $data]);
    }

    public function generate()
    {
        $generate = Str::random(4);
        $enkrip = Hash::make($generate);

        return ['generate' => $generate, 'enkrip' => $enkrip]; 
    }

    public function post(CalonRequest $request)
    {
        $data = $request->all();
        $data['showpass'] = $request->password;
        $data['password'] = Hash::make($request->password);

        // dd($data);

        Calon::create($data);

       $calon = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) 
        ]);

        $calon->assignRole('user');

        return redirect()->route('calon.index');        
    }
}
