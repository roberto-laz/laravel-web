<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{    

    public function index(): View
    {
        $users = User::all();
        return view('index', compact('users'));
    }


    public function create(): View
    {
        return view('create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $user = User::create($request->all());
        return redirect(route('users.index'));
    }


    public function show(User $user): View
    {
        return view('show', compact('user'));
    }


    public function edit(User $user): View
    {
        return view('edit', compact('user'));
    }


    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $message = $user->update($request->all()) ?
        ['successful_message' => 'User updated successfully'] : ['error_message' => 'Failed to update user'];
        return redirect()->route('users.index')->with($message);
    }


    public function destroy(User $user): RedirectResponse
    {        
        $message = $user->delete() ?
        ['successful_message' => 'User deleted successfully'] : ['error_message' => 'Failed to delete user'];
        return redirect()->route('users.index')->with($message);
    }
}
