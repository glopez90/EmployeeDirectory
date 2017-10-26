@extends('layouts.master')

@section('header')
<li class="nav-item active">
    <a class="nav-link jaz-text" href="{{ url('/') }}">Main <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link jaz-text" href="{{ route('employee.index') }}">Employee Management</a>
</li>
@stop

@section('content')
<!-- Ajax call -->
<script src="{{asset('js/custom.js')}}"></script>

<div class="container">
<br>

<div class="row justify-content-md-center">
      <div class="col-md-6">
        <form action="" method="GET">
              <div class="input-group col-md-12">
                  <input type="text" class="form-control input-lg" name="search" placeholder="Search someone cool ..." />
                  <span class="input-group-btn">
                      <button class="btn btn-lg" type="submit">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
      </div>
</div>

<br>
    <!-- Team Members Row -->

      @if(!$employees->isEmpty())
      <div class="row">
        @foreach($employees as $employee)
          <div class="col-lg-3 col-sm-6 text-center mb-4">
            @if(!empty($employee['picture']))
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{asset('images/'.$employee->picture)}}" alt="">
            @else
              <img class="rounded-circle img-fluid d-block mx-auto" src="{{asset('images/unknow.jpg')}}" alt="">
            @endif
            <h3>{{ $employee->firstName.' '.$employee->lastName }} <br>
            <small>{{ $employee->title }} ({{ $employee->department }})</small></h3>
            <!-- <p><i class="fa fa-envelope-o" aria-hidden="true"> {{ $employee->email }}</i> <br> -->
              <p><i class="fa fa-envelope-o" aria-hidden="true"> {{ $employee->email }}</i> <br>
            @if($employee->workPhone)
              <i class="fa fa-phone" aria-hidden="true"> {{ substr_replace(substr_replace($employee->workPhone,'-',3,0),'-',7,0) }}</i>
              <br>
            @endif
            @if(!empty(Auth::user()->email) && $employee->personalPhone && Auth::user()->email == 'admin@jazwares.com')
              <i class="fa fa-mobile" aria-hidden="true"> {{ substr_replace(substr_replace($employee->personalPhone,'-',3,0),'-',7,0) }}</i>
            @endif

            </p>
        </div>
        @endforeach
        </div>
        @else
        <div class="row justify-content-md-center">
          <h1>No records</h1>
        </div>
      @endif

<br><br><br>

</div>


@stop
