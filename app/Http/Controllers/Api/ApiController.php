<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $projects = Project::with('technologies', 'type')->paginate(10);

        return response()->json([
            'sucess' => true,
            'results' => $projects,
        ]);
    }
}
