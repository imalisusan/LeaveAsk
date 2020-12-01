@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('applications.create') }}" style="background-color:#4B94FD; border: 0;"> Create New application</a>
            </div><br><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach ($applications as $application)
        <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5> <a href="{{ route('applications.show',$application->id) }}"class="font-weight-bold mb-3"> Employee Name: {{ $application->author}}</a> </h5>
                    <p class="mb-0">Type: {{ $application->type }}</p>
                    <p class="mb-0">Start Date: {{ $application->start_date }}</p>
                    <p class="mb-0">Amount of days: {{ $application->amount }}</p>
                    <p class="mb-0">End Date: {{ $application->end_date }}</p>
                    <p class="mb-0">Reason: {{ $application->reason }}</p>
                    <p class="mb-0">Status: {{ $application->status }}</p>
                </div>
                <div class="card-body">
                    <a href="{{ route('applications.show',$application->id) }}" class="card-link">View</a>
                </div>
        </div><br>
    @endforeach
    {!! $applications->links() !!}
    </div>
@endsection