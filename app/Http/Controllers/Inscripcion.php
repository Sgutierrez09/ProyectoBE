<?php

namespace App\Http\Controllers;

use App\Notifications\ContraseñaBienestarEstudiantil;
use Illuminate\Http\Request;
use App\User;
use App\User_role;

class Inscripcion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            return view('inscripcion');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $password = $this->generatePass();
        $user = User::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($password),

        ]);

        User_role::create([
            'user_id' => $user->id,
            'role_id' => 2,
        ]);
        $user->notify(new ContraseñaBienestarEstudiantil($password));
        return redirect('/home');
    }

     public function generatePass(){
        $largo = 8;
        $cadena_base = 'ABCDEFGHIJKLMNÑOPQRSEUVWXYZabcdefghijklmnoñopqrstuvwxyz0123456789';
        $password = '';
        $limite = strlen($cadena_base) -1;

        for ($i=0; $i < $largo; $i++)
            $password .= $cadena_base[rand(0, $limite)];

        return $password;
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
