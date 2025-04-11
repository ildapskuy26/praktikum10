<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelloWorld;

class HelloWorldController extends Controller
{
    public function index()
    {
        return response()->json(HelloWorld::all());
    }

    public function show($id)
    {
        $message = HelloWorld::find($id);
        if (!$message) {
            return response()->json(['error' => 'Message not found'], 404);
        }
        return response()->json($message);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'POST request received!', 'data' => $request->all()]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "PUT request received for ID $id", 'data' => $request->all()]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "DELETE request received for ID $id"]);
    }
}