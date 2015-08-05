@extends('layout.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading" style="overflow: hidden">Posts
            <a href="{{route('post.create')}}" class="pull-right btn btn-primary">Add</a>
        </div>
        <div class="panel-body">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <td>Title</td>
                    <td>Created date</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->created_at->format('M d, Y H:i A')}}</td>
                        <td>

                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-default">Edit</a>
                            {!!Form::open(['route'=>['post.destroy', $post->id], 'style'=>"display:inline",
                            'method'=>'delete'])!!}
                            {!!Form::button('Delete', ['type'=>'submit','class'=>'btn btn-danger'])!!}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Post not found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {!!$posts->render()!!}
        </div>
    </div>
@stop