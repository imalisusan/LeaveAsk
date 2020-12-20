@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
       
        <div class="col-9 pt-5">
            <div class="pt-3 d-flex justify-content-between">
                <h1>{{ Auth::user()->name }}</h1>
               
            </div>
            <div class="d-flex h6">
                    <div class="pr-5" style="color:#242323;">{{ Auth::user()->role }}</div>
            </div>
            <div class="pt-2 font-weight-bold" style="color:#242323;">Department: Finance</div>
            <div style="color:#242323;">Member Since: {{ Auth::user()->created_at }}</div> 
            <div style="color:#242323;">Phone Number: 0{{ Auth::user()->phone }}</div>   
            <div style="color:#242323;">Remaining Leave Days: 
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
            <a class="btn btn-primary" href="{{ route('users.edit', Auth::user()->id) }}" style="background-color: #388087; border:0px;"> Edit Profile</a>
        </div>
        <div class="col-3 p-5">
            <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->avatar . '') }}"  style="height:250px;width:250px" onerror="this.src='uploads/avatars/avatar.svg';">
            </div>
    </div>
    <img src="file.svg" style="height:85px;width:85px" onerror="this.src='uploads/avatars/file.svg';">
    <a class="font-weight-bold" href="{{ route('applications.create') }}" style="color: #388087; margin-left:80%;">Apply for Leave</a>
    
    <h3>Your Past Applications</h3>

    <div class="row pt-5">
    @foreach($applications as $application)
            <div class="col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #F6f6f2;">
                    <h5 class="font-weight-bold mb-3">Application ID: {{ $application->id }}</h5>
                    <p class="mb-0" style="color:#242323;">Type: {{ $application->type }}</p>
                    <p class="mb-0" style="color:#242323;">Start Date: {{ $application->start_date }}</p>
                    <p class="mb-0" style="color:#242323;">Amount of days: {{ $application->amount }}</p>
                    <p class="mb-0" style="color:#242323;">Reason: {{ $application->reason }}</p>
                    <p class="mb-0" style="color:#242323;">End Date: {{ $application->end_date }}</p>
                    </div>
                    <div class="card-body" style="background-color: #F6f6f2;">
                        <a href="{{ route('applications.show',$application->id) }}" class="card-link">View</a>
                        <a class="card-link" href="{{ route('applications.edit',$application->id) }}">Edit</a>
                    </div>
                </div><br>
            </div>
    @endforeach
    </div>
    {!! $applications->links() !!}
</div>
</body>
</html>
@endsection
