@extends('app')

@section('content')
<h2>Edit Employee:  {{ $employee->fname }} {{ $employee->lname }}</h2>
<hr/>

<div class="bs-example">
    <br />
    <div>
        {!! Form::model($employee, ['method' => 'PATCH', 'action' => ['EmployeesController@update', $employee->id]]) !!}

            @include('pages._form', ['submitBtnText' => 'Update Employee']);

        {!! Form::close() !!}

        @include('errors.list');

    </div>
</div>

@stop