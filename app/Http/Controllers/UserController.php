<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Profil;
use Auth;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = User::all();
        return view('user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = Role::all();
        return view('user.user-create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request) {

        $newuser = new User;
        $newuser->email = $request->email;
        $newuser->password = bcrypt($request->password);
        $newuser->role_id = $request->role;
        $newuser->save();
        
        //create profil while creating user account
        $profil = new Profil;
        $profil->user_id = $newuser->id;
        $profil->save();

        $user = User::all();
        return view('user.user', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        return view('user.user-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user) {
        return view('user.user-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, User $user) {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
	    $user->save();
	    return view('home', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $user->delete();
        return redirect()->back();
    }
}
