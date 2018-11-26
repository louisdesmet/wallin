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

        <div class="form-group">
            <label>Featured image</label>
            {{ Form::select('featured_image[]', $filenames, null, ['class' => 'form-control featured-select']) }}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> 
        {!! Form::close() !!} 
        <div class="mt">
            @foreach ($images as $image)  
            <div class="postImage">               
                <img width="200px" height="200px" src="{{ asset($image['dirname'] . '/' . $image['basename']) }}">
                <button class="btn btn-sm btn-primary featuredButton" value="{{ $image['basename'] }}">Set as featured image</button>
                <form action="{{route('delete.image')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $image['dirname'] . '/' . $image['basename'] }}" name="name">
                    <input class="btn btn-sm btn-danger" type="submit" value="x">
                </form>              
            </div>                   
            @endforeach
        </div>
    </div> 
</div>
<script>
    $(function () {
        $('.featuredButton').on('click', function () {
            $('.featured-select').val($(this).val());
        });
    });

    var selDiv = "";
    var storedFiles = []; //store the object of the all files

    document.addEventListener("DOMContentLoaded", init, false);

    function init() {
        //To add the change listener on over file element
        document.querySelector('#attachfile').addEventListener('change', handleFileSelect, false);
        //allocate division where you want to print file name
        selDiv = document.querySelector("#filelist");
    }

    //function to handle the file select listenere
    function handleFileSelect(e) {
        //to check that even single file is selected or not
        if (!e.target.files)
            return;

        //for clear the value of the selDiv
        selDiv.innerHTML = "";

        //get the array of file object in files variable
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);

        //print if any file is selected previosly 
        for (var i = 0; i < storedFiles.length; i++)
        {
            selDiv.innerHTML += "<div class='filename'> <span> " + storedFiles[i].name + "</span></div>";
        }
        filesArr.forEach(function (f) {
            //add new selected files into the array list
            storedFiles.push(f);
            //print new selected files into the given division
            selDiv.innerHTML += "<div class='filename'> <span> " + f.name + "</span></div>";
        });

        //store the array of file in our element this is send to other page by form submit
        $("input[name=replyfiles]").val(storedFiles);
    }


</script>
@endsection