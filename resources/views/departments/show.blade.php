@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> View Course Details</h2>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $course->name }}
                </div>
            </div>
        
            <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
                </div>
        </div>
    </div>
@endsection