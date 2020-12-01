@extends('layouts.app')

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
                <strong>Course:</strong>
                {{ $user->course }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>About:</strong>
                {{ $user->about }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Website:</strong>
                {{ $user->website }}
            </div>
        </div>
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}"> Edit</a>
        </div>
        &nbsp &nbsp
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
        </div>
    </div>
@endsection