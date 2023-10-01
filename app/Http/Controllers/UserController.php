<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Direcao;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('users\users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departaments = Direcao::all();
        return view('users\users_form', ['departaments' => $departaments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->email_verification_status = ($request->status == 'on') ? true : false;
        $user->email_verification_token = Str::random(30);
        $user->role = $request->role;

        $user->save();
        return redirect()->route('users')->with('success', 'User '.$user->id.' has bean add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
