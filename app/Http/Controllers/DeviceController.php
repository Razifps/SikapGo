<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function updateStatus(Request $request)
    {
        $status = $request->input('status');
        // Logika untuk memperbarui database atau state
        return response()->json(['success' => true]);
    }
}
