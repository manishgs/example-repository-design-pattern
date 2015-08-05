@extends('layout.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Post [{{$post->title}}]</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::model($post,['route' => array('post.update', $post->id) , 'class'=>'form-horizontal',
            'method'=>'PATCH']) !!}
            @include('post.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop
