@extends('app')

@section('content')
<h2>Home</h2>

<div class="bs-example">
	<h3 class="text-center">Employees</h3>
	<br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Row</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        	@if (count($employees))
	        	@foreach ($employees as $employee)
	        	<tr>
	                <td>1</td>
	                <td>{{$employee->fname}}</td>
	                <td>{{$employee->lname}}</td>
	                <td>{{$employee->department_id}}</td>
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