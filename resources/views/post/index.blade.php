@extends('layout.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Posts</div>
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
                        <td>Edit Delete</td>
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