<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use \Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Auth\AuthController;

class UserController extends AuthController
{
    public function __construct() {

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Process the login in information.
     *
     * @return string
     */
    public function access(Request $req)
    {
        return $this->postLogin($req);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        return  $this->postRegister($request) ? redirect($this->redirectPath) : view('user.register');
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

    public function register() 
    {
        return view('auth.register')->with('message', 'hello');
    }
    
    public function login() 
    {
        return view('auth.login');
    }
    
    public function remoteCheck() {
        return 123;
    }
    
    public function logout()
    {
        return $this->getLogout();
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
