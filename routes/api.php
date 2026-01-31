<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/owner-logs', function () {
    $logs = DB::table('mp_i_owner_logs')
        ->orderByDesc('created_at')
        ->limit(10)
        ->get();

    return response()->json([
        'success' => true,
        'count' => $logs->count(),
        'data' => $logs,
    ]);
});