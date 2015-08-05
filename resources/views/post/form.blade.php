<div class="form-group">
    {!! Form::label('title', 'Title:', ['class'=>'col-sm-2 control-label'])!!}
    <div class="col-sm-7">
        {!! Form::text('title',null, ["class"=>"form-control"])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class'=>'col-sm-2 control-label'])!!}
    <div class="col-sm-7">
        {!! Form::textarea('description',null, ["class"=>"form-control"])!!}
    </div>
</div>

<div class="form-action">
    <div class="col-sm-7 col-lg-offset-2">
        {!! Form::submit('Submit',['class'=>'btn pull-right btn-primary']) !!}
    </div>
</div>
