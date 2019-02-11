<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\NewsletterMailEvent;


class UserController extends Controller
{
    public function index(){
        
        $all=User::all();
        return view('User.user',compact('all'));
    }
    public function create(){
        return view('User.user-create');
    }
    public function store(Request $request){
       
        $newuser= New User;
        $newuser->name = $request->name;
        $newuser->prenom=$request->prenom;
        $newuser->email=$request->email;
        $newuser->password=$request->password;
        $newuser->save();
        $all=User::all();

        return view('User.user',compact('all'));

    }
    public function show($id){
        $user=user::where('id',$id)->first();
        return view('User.user-show',compact('user'));
    }
    public function edit($id){
        $user=user::where('id', $id)->first();
        return view ('User.user-edit',compact('user'));
    }
    public function update(Request $request ,$id){
        $all = User::find($id);
       //$user = new User;
        $all->name=$request->name;
        $all->prenom=$request->prenom;
        $all->email=$request->email;
        $all->save();
        $all = User::all();

        return view('User.user',compact('all'));
    }
    public function destroy($all){
        $all=User::find($all);
        $all->delete();
        return redirect()->back();
    }
    public function mail(Request $request){
        event(new NewsletterMailEvent($request));

        return redirect()->back();
    }
    

}
