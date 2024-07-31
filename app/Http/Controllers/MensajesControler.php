<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajesControler extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'envia' => 'required|string|in:user,client',
            'envia_id' => 'required|integer',
            'recive' => 'required|string|in:user,client',
            'recive_id' => 'required|integer',
            'mensaje' => 'required|string',
        ]);

        $message = Mensaje::create($validated);

        return response()->json($message, 201);
    }

    public function index()
    {
        $messages = Mensaje::all();
        return response()->json($messages);
    }

    public function show($id)
    {
        $message = Mensaje::findOrFail($id);
        return response()->json($message);
    }
}
