@extends('app')

@section('content')
<h2>Employee</h2>
<hr/>

<div class="bs-example">
	<br />
    <div>

        <h3>{{$employee->fname}} {{$employee->lname}}</h3>
        <p>{{$employee->department_name}}</p>
        <p>{{$employee->email}}</p>
    </div>
</div>
@stop