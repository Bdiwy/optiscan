<?php

namespace App\Http\Controllers;

use PDOException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;

class CommandController extends Controller
{
    public function gitPull()
{
    $process = new Process(['git', 'pull']);
    $process->run();

    if (!$process->isSuccessful()) {
        $errorOutput = $process->getErrorOutput();
        $output = $process->getOutput();
        return response()->json([
            'message' => 'Git pull failed',
            'error_output' => $errorOutput,
            'output' => $output,
        ], 500);
    }

    return response()->json(['message' => 'Git pull executed successfully']);
}
public function migrate()
{
    try {
        // Get database name from configuration
        $databaseName = config('database.connections.mysql.database');

        // Switch to the target database
        DB::statement("USE $databaseName");

        // Run the migrations
        Artisan::call('migrate');

        return response()->json(['message' => 'Database migrated successfully']);
    } catch (PDOException $e) {
        Log::error('Database migration failed: ' . $e->getMessage());

        return response()->json([
            'error' => 'Database migration failed',
            'message' => $e->getMessage()
        ], 500);
    }
}

    public function clearCache()
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:cache');

        return response()->json(['message' => 'Cache, view, config and route cleared successfully']);
    }
}
