@extends('layouts.app')

@section('content')
<div class="card">    
    <div class="card-header">
        Edit project       
    </div>
    <div class="card-body">
        {{ Form::model($project, array('route' => array('projects.update', $project->id), 'method' => 'PUT', 'files' => true)) }}             
            <div class="form-group">
                <label>Title</label>
                {{ Form::text('title', null, ['class' => 'form-control']) }}  
            </div>
            <div class="form-group">
                <label>Text</label>            
                {{ Form::textarea('text', null, ['class' => 'form-control']) }}  
            </div> 
            <div class="form-group">
                Select image to upload:
                <input type="file" name="file[]" multiple>
            </div>  
            <div>
                @foreach ($images as $image)
                    <img width="150px" height="150px" src="{{ asset($image['dirname'] . '/' . $image['basename']) }}">
                @endforeach
            </div>
            <div class="form-group">
                <label>Featured image</label>
                {{ Form::select('featured_image[]', $filenames, null, ['class' => 'form-control']) }}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
        {!! Form::close() !!}       
    </div> 
</div>
@endsection