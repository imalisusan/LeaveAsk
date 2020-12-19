@extends('layouts.app')

@section('content')

<div class="flex flex-col">
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif
    <div class="container" >
                  @foreach ($users as $user)
                    <div class="card" style="width: 100%;" >
                      <div class="card-body">
                          <h5> <a href="{{ route('users.show',$user->id) }}"class="font-weight-bold mb-3" style="color: #388087;"> Employee Name: {{ $user->name}}</a> </h5>
                          <p class="mb-0" style="color:#242323;">Email Address: {{ $user->email }}</p>
                          <p class="mb-0" style="color:#242323;">Department: {{ $user->department }}</p>
                          <p class="mb-0" style="color:#242323;">Employee Since: {{ $user->start_date }}</p>
                          <a class="text-blue-600 hover:text-blue-900" href="{{ route('users.show',$user->id) }}">Show</a>
                      </div>
                    </div><br>
                  @endforeach
    </div>
</div>
{!! $users->links() !!}
@endsection