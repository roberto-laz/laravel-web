<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
                "name" => "required|max:16",
                "email" => "required",
                "password" => "required"
            ]);        
        $user = User::create($request->all());
        return redirect(route('users.index'));
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $message = User::find($id)->update($request->all()) ?
        ['successful_message' => 'User updated successfully'] : ['error_message' => 'Failed to update user'];
        return redirect()->route('users.index')->with($message);
    }


    public function destroy($id)
    {        
        $message = User::destroy($id) ?
        ['successful_message' => 'User deleted successfully'] : ['error_message' => 'Failed to delete user'];
        return redirect()->route('users.index')->with($message);
    }
}
