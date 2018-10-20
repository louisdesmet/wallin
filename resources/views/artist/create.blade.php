@extends('layouts.app')

@section('content')
<div class="card">    
    <div class="card-header">
        Create artist
        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Create</button>
    </div>
    <div class="card-body">
        <form action="{{route('artists.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">  
            </div>
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="text" class="form-control">  
            </div> 
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
</div>
@endsection