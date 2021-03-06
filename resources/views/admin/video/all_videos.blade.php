@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a style="text-decoration: none;" href="{{route('addVideoView')}}" role="button">{{__('Add new video')}}</a>
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <table style="width:100%" border=1 frame=void rules=rows>
                        <thead>
                            <tr>
                                <th class="text-center">title</th>
                                <th class="text-center">number of views</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">view</th>
                                <th class="text-center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td  class="text-center">{{$video->title}}</td>
                                    <td  class="text-center">{{$video->number_of_readers}}</td>
                                    <td class="text-center"><a href="{{route('deleteVideo', ['id' => $video->id])}}" role="button">{{__('Delete ')}}</a></td>
                                    <td class="text-center"><a href="{{route('editVideoView', ['id' => $video->id])}}" role="button">{{__('Edit ')}}</a></td>
                                    <td class="text-center"><a href="{{route('video', ['id' => $video->id])}}" role="button">{{__('view ')}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
