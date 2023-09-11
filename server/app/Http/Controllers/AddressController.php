<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::all();

        return response()->json($addresses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado.'], 404);
        }

        return response()->json($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado.'], 404);
        }

        $address->update($request->all());

        return response()->json($address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Endereço não encontrado.'], 404);
        }

        $address->delete();

        return response()->noContent();
    }
}
