@extends('layouts.master')

@section('header')
<li class="nav-item">
    <a class="nav-link jaz-text" href="{{ url('/') }}">Main <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link jaz-text" href="#">Employee Management</a>
</li>
@stop


@section('content')
<h1 class="display-4" style="text-align:center">Employee Administration</h1>
<br>
  <a href="employee/create" class="btn btn-primary">Add new</a>

  <table class="table" style="margin-top:10px">
    <thead>
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Email</th>
        <th>Work number</th>
        <th>Personal number</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
      <tr>
        <td>{{ $employee->firstName }} {{ $employee->lastName }}</td>
        <td>{{ $employee->title }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->workPhone }}</td>
        <td>{{ $employee->personalPhone }}</td>
        <td>
            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-success">Edit</a>
        </td>
        <td>
          {!! Form::open(['method'=>'delete', 'route'=>['employee.destroy', $employee->id]]) !!}
          {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=> 'return confirm()']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop
