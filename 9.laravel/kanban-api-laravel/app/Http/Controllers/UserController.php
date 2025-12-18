<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function store(StoreUserRequest $request){

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return response()->json(['message' => 'User created successfully'], 201);
    }

    //mostrar tareas de un usuario autenticado
    public function tasksByAuthenticatedUser(Request $request){
        $user = $request->user();
        $tasks = Task::where('user_id', $user->id)->get();

        if ($tasks->isEmpty()) {
            return response()->json(['message' => 'No tasks found for the authenticated user'], 404);
        }

        return response()->json($tasks, 200);
    }
}
