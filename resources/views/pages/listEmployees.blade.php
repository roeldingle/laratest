@extends('app')

@section('content')
<h2>
    Employees
    <a class="pull-right btn btn-primary" href="{{ action('EmployeesController@create')}}">Add Employee</a>
</h2>

<hr/>

<div class="bs-example">
	<br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Row</th>
                <th>Employee Name</th>
                <th>Department</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        	@if (count($employees))
	        	@foreach ($employees as $employee)
                
	        	<tr>
	                <td>{{$employee->id}}</td>
	                <td>
                        <a href="{{ action('EmployeesController@show',[$employee->id])}}">
                            {{$employee->fname}} {{$employee->lname}}</td>
                        </a>
	                <td>{{$employee->department_name}}</td>
	                <td>{{$employee->email}}</td>
	            </tr>
                
	        	@endforeach

	        @else
	        	<tr><td colspan="6" class="text-center">No results found</td></tr>
        	@endif

        </tbody>
    </table>


</div>
@stop