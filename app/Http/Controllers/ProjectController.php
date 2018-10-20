<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $project = new Project;
        $project->title = $request->title;
        $project->text = $request->text;
        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) {
        $images = [];
        $path = 'img/projects/' . $project->id;
        $filenames = [];
        if(\File::exists($path)) {
            $files = \File::files($path);
            
            foreach ($files as $index => $path) {
                $images[] = pathinfo($path);
                $filenames[$images[$index]['basename']] = $images[$index]['basename'];

            }
        }
        return view('project.edit', compact('project', 'images', 'filenames')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project) {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);
        
        
        $new = Project::findOrFail($project->id);     
        $new->title = $request->title;
        $new->text = $request->text;
       
        $new->featured_image = $request->featured_image[0];
        
        if($files = $request->file('file')) {
            $destinationPath = 'img/projects/' . $project->id;
            foreach($files as $file) {
                $file->move($destinationPath, $file->getClientOriginalName());
            }
        }
        $new->save();
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project) {
        //
    }

    public function all() {
        $projects = Project::all();
        return view('projecten', compact('projects'));
    }
    
    public function single(Project $project) {   
        $firstblocks = [];
        $secondblocks = [];
        $firstblockamount;
        if(strlen($project->text) < 400) {
            $firstblockamount = 2;
        } else if(strlen($project->text) < 800) {
            $firstblockamount = 4;
        } else {
            $firstblockamount = 6;
        }
        $files = \File::files('img/projects/' . $project->id);
        foreach ($files as  $index => $path) {
            if($index < $firstblockamount) {
                $firstblocks[] = pathinfo($path);
            } else {
                $secondblocks[] = pathinfo($path);
            }
            
        }
        return view('project', compact('project', 'firstblocks', 'secondblocks'));       
    }

}
