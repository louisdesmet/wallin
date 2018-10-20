@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Artist
            <a href="{{route('artists.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add artist</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                </tr>
                @foreach ($artists as $artist)
                    <tr>
                        <td><a href="{{ route('artists.edit', [$artist])}}">{{ $artist->title }}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection