<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();

        $query->when($request->name, function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        })->when($request->cpf, function ($query) use ($request) {
            $query->where('cpf', '=', $request->cpf);
        })->when($request->date_start, function ($query) use ($request) {
            $query->where('created_at', '>=', $request->date_start);
        })->when($request->date_end, function ($query) use ($request) {
            $query->where('created_at', '<=', $request->date_end);
        });

        // $users = $query->orderby('created_at', 'DESC')->get();
        $users = $query->get();

        foreach ($users as $user) {
            $profileInfo = Profile::find($user['profile_id']);

            $user['profile_id'] = [
                'id' => $profileInfo->id,
                'role' => $profileInfo->role,
            ];
        }

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json('Usuário não encontrado.', 404);
        }

        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json('Usuário não encontrado.', 404);
        }

        $user->update($request->all());

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json('Usuário não encontrado.', 404);
        }

        $user->delete();

        return response()->noContent();
    }
}
