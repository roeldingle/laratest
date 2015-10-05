@extends('app')

@section('content')
<h2>New Employee</h2>
<hr/>

<div class="bs-example">
	<br />
    <div>
    	{!! Form::open(['url' => 'employees']) !!}

    	<div class="form-group">
    		{!! Form::label('fname', 'First name:') !!}
    		{!! Form::text('fname', null, ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::label('lname', 'Last name:') !!}
    		{!! Form::text('lname', null, ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::label('department_id', 'Department:') !!}
    		{!! Form::select('department_id', $departments , null,  ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::label('email', 'Email:') !!}
    		{!! Form::text('email', null, ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::submit('Add Employee',['class' => 'btn btn-primary form-control']) !!}
    	</div>
    		

    	{!! Form::close() !!}

        @if($errors->any())
            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@stop