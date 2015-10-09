@extends('app')

@section('content')
<h2>New Employee</h2>
<hr/>

<div class="bs-example">
	<br />
    <div>
    	{!! Form::open(['url' => 'employees']) !!}

    	   @include('pages._form', ['submitBtnText' => 'Add Employee']);
    		
    	{!! Form::close() !!}

        @include('errors.list');

    </div>
</div>
@stop