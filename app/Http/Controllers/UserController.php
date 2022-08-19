<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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
                "name" => "required|max:4",
                "email" => "required",
                "password" => "required"
            ]);        
        $user = User::create($request->all());    
        return redirect(route('users.index'));
    }


    public function show($id): JsonResponse
    {
        $user = User::find($id);
        return response()->json(compact('user'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id): JsonResponse
    {
        $message = User::find($id)->update($request->all()) ?
            "User updated" : "User not found";
        return response()->json($message);
    }


    public function destroy($id): JsonResponse
    {
        $message = User::destroy($id) ? "User deleted" : "User not found";
        return response()->json($message);
    }
}
