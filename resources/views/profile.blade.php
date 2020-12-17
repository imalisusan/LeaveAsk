@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->avatar . '') }}" class="rounded-circle" style="height:200px;width:200px" onerror="this.src='uploads/avatars/avatar.png';">
        </div>
        <div class="col-9 pt-5">
            <div class="pt-3 d-flex justify-content-between">
                <h1>{{ Auth::user()->name }}</h1>
                <a class="font-weight-bold" href="{{ route('applications.create') }}">Apply for Leave</a>
            </div>
            <div class="d-flex h6">
                    <div class="pr-5">{{ Auth::user()->role }}</div>
            </div>
            <div class="pt-2 font-weight-bold">Department: Finance</div>
            <div>Member Since: {{ Auth::user()->created_at }}</div> 
            <div>Phone Number: 0{{ Auth::user()->phone }}</div>   
            <div>Remaining Leave Days: 
                @php
                    $leave_days = 21;
                    $found = false;
                    foreach($applications as $application)
                    {
                        if($application->amount > 0)
                        {
                            $found = true;
                        }
                    }
                    if($found)
                    {
                        if ($application->status == 'Approved') {
                            $remaining_leave = $leave_days - ($application->amount);
                            echo $remaining_leave;
                        }
                        else {
                            echo $leave_days;
                        }
                    }
                    else {
                        echo $leave_days;
                    }
                @endphp    
            </div>  <br>
            <a class="btn btn-primary" href="{{ route('users.edit', Auth::user()->id) }}"> Edit Profile</a>
        </div>
    </div>

    <div class="row pt-5">
    @foreach($applications as $application)
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                    <h5 class="font-weight-bold mb-3">Application ID: {{ $application->id }}</h5>
                    <p class="mb-0">Type: {{ $application->type }}</p>
                    <p class="mb-0">Start Date: {{ $application->start_date }}</p>
                    <p class="mb-0">Amount of days: {{ $application->amount }}</p>
                    <p class="mb-0">End Date: {{ $application->end_date }}</p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('applications.show',$application->id) }}" class="card-link">View</a>
                        <a class="card-link" href="{{ route('applications.edit',$application->id) }}">Edit</a>
                    </div>
                </div><br>
            </div>
    @endforeach
    </div>
    {!! $applications->links() !!}
</div>
@endsection
