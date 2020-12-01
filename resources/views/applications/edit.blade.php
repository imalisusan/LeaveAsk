@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('applications.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('applications.update',$application->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type</strong>
                    <select name="type" class="form-control" value="{{ $application->type }}">
                        <option name="type">{{ $application->type }}</option>
                            <option name="annual">Annual Leave</option>
                            <option name="maternity">Maternity Leave</option>
                            <option name="paternity">Paternity Leave</option>
                            <option name="sick">Sick Leave</option>
                    </select><br>
                </div>  
            </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date:</strong>
                <input type="date" class="form-control" name="start_date" placeholder="Start Date" value="{{ $application->start_date }}">
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End Date:</strong>
                <input type="date" class="form-control" name="end_date" placeholder="End Date" value="{{ $application->end_date }}">
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount of Days:</strong>
                <input type="number" class="form-control" name="amount" placeholder="Amount" value="{{ $application->amount }}">
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reason:</strong>
                    <textarea class="form-control" style="height:150px" name="reason" placeholder="Detail" >{{ $application->reason }}</textarea>
                </div>
            </div>
        </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection