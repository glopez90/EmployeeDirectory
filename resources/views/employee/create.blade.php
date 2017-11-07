@extends('layouts.master')


@section('content')
<h1 class="display-4" style="text-align:center">Add Employee</h1>
<br>


{!! Form::open(['url'=>'employee', 'class'=>'form-horizontal', 'files' => true]) !!}
  <div class="form-group row">
    {!! Form::label('firstName','First Name', ['class'=>'col-sm-2 col-form-label']) !!}
    <div class="col-sm-4">
      {!! Form::text('firstName', null, ['class'=>'form-control']) !!}
      {!! $errors->has('firstName')?$errors->first('firstName'):'' !!}
    </div>
    {!! Form::label('lastName','Last Name', ['class'=>'col-sm-2 col-form-label']) !!}
    <div class="col-sm-4">
      {!! Form::text('lastName', null, ['class'=>'form-control']) !!}
      {!! $errors->has('lastName')?$errors->first('lastName'):'' !!}
    </div>
   </div>
   <div class="form-group row">
     {!! Form::label('department','Department', ['class'=>'col-sm-2 col-form-label']) !!}
     <div class="col-sm-4">
       {!! Form::text('department', null, ['class'=>'form-control']) !!}
     </div>
     {!! Form::label('title','Title', ['class'=>'col-sm-2 col-form-label']) !!}
     <div class="col-sm-4">
       {!! Form::text('title', null, ['class'=>'form-control']) !!}
      {!! $errors->has('title')?$errors->first('title'):'' !!}
     </div>
    </div>
    <div class="form-group row">
      {!! Form::label('email','Email', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-4">
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
        {!! $errors->has('email')?$errors->first('email'):'' !!}
      </div>
      {!! Form::label('workPhone','Work Phone', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-4">
        {!! Form::number('workPhone', null, ['class'=>'form-control']) !!}
      </div>
     </div>
     <div class="form-group row">
       {!! Form::label('personalPhone','Personal Phone', ['class'=>'col-sm-2 col-form-label']) !!}
       <div class="col-sm-4">
         {!! Form::number('personalPhone', null, ['class'=>'form-control']) !!}
       </div>
       {!! Form::label('dateStarted','Date Started', ['class'=>'col-sm-2 col-form-label']) !!}
       <div class="col-sm-4">
         {!! Form::date('dateStarted', null, ['class'=>'form-control']) !!}
       </div>
      </div>
      <div class="form-group row">
        {!! Form::label('location','Location', ['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-4">
          {!! Form::text('location', null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::label('picture','Picture', ['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-4">
          {!! Form::file('picture', null, ['class'=>'form-control']) !!}
        </div>
       </div>

      <div class="offset-md-11">
        {!! Form::submit('Save', ['class'=> 'btn btn-primary']) !!}
      </div>

 {!! Form::close() !!}
@stop
