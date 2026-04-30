<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // PUBLICO
    public function index()
    {
        return Project::all();
    }

    // PUBLICO
    public function show($id)
    {
        return Project::findOrFail($id);
    }

    // PRIVADO
    public function store(Request $request)
    {
        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($project, 201);
    }
}