<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create($data);
        return redirect('/user');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect('/user');
    }
}
