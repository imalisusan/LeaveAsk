@extends('laratrust::panel.layout')

@section('content')
    <div class="container">
    <div class="row center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Account Details</h2>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $user->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {{ $user->role }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $user->department }}
            </div>
        </div>
        <div class="flex justify-end">
          <a class="btn btn-blue mr-4" href="{{ route('users.edit', $user->id) }}">Edit</a>
          <a class="btn btn-blue" href="{{ route('users.index') }}"> Back</a>        
        </div>
    </div>
@endsection