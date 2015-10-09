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
	{!! Form::submit($submitBtnText,['class' => 'btn btn-primary form-control']) !!}
</div>