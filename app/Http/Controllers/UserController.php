<?php
/**
 * Created by PhpStorm.
 * User: Gud Kush
 * Date: 4/21/2018
 * Time: 9:31 AM
 */

namespace App\Http\Controllers;


use App\User;

class UserController
{
    public function index()
    {
        $users= User::all();
        return view('user.index',compact('users'));
    }
    public function show($id)
    {
        return view('user.show', ['user'=>User::findOrFail($id)]);
    }

    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect ('user/show/'.$user->id);
    }
}