<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();

        if(Auth::user()){
            return view('dashboard');
        }
        return view('projects.index', compact('projects'));
    }

    public function view()
    {
        $projects = Project::get();

        return view('projects.view', compact('projects'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project;
        $project->image = $request->image;
        $project->name = $request->name;
        $project->subtitle = $request->subtitle;
        $project->desc = $request->desc;
        $project->link = $request->link;

        $project->save();



        return to_route('projects.create')->with('success', 'Продуктот е успешно додаден!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): Response
    {
        return response();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): Response
    {
        return response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {

        $project->image = $request->image;
        $project->name = $request->name;
        $project->subtitle = $request->subtitle;
        $project->desc = $request->desc;
        $project->link = $request->link;

        $project->save();
        return to_route('dashboard')->with('success', 'Продуктот е успешно изменет!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // dd($project);
        $project->delete();
        return to_route('dashboard')->with('success', 'Продуктот е успешно избришан!');
    }
}
