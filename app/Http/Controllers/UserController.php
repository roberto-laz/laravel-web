<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function index(): JsonResponse
    {
        $users = User::all();
        return view('index');
    }


    public function create()
    {
        //
    }

    public function store(Request $request): JsonResponse
    {
        $message = User::create($request->all()) ?
        "User created successfully" :
        "An error has ocurred when creating a new user";
        return response()->json($message);
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
