@if (Auth::id() == $user->id)
    {!! Form::open(['route' => 'microposts.store']) !!}
        <div class="form-group mt-sm-2">
            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
            {!! Form::submit('Post', ['class' => 'btn btn-outline-info btn-block']) !!}
        </div>
    {!! Form::close() !!}
@endif