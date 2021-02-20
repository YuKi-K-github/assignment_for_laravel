<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidationRequest;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $name = '';
        return view('login',[
            'name' => $name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $name = '';
        return view('register',[
            'name' => $name,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        
        $name = $request->name;
        // $user = new \App\User;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        // $user->save();

        return view('/home', [
            'name' => $name,
        ]);
    }

    
}
