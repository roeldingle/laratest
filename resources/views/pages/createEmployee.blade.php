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
    		{!! Form::select('department_id', ['Creative Tech','Creative Design','Content Writers','Business Development', 'Sprnklr'], null,  ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::label('email', 'Email:') !!}
    		{!! Form::text('email', null, ['class' => 'form-control']) !!}
    	</div>

    	<div class="form-group">
    		{!! Form::submit('Add Employee',['class' => 'btn btn-primary form-control']) !!}
    	</div>
    		

    	{!! Form::close() !!}
    </div>
</div>
@stop