<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('/vendor/laratrust/img/logo.png') }}">
  <title>LeaveAsk - @yield('title')</title>
  <link href="{{ asset(mix('laratrust.css', 'vendor/laratrust')) }}" rel="stylesheet">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body
        {
            background-color: #F6f6f2;
            color: #388087;
        }
    </style>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #388087;">
                    {{ config('app.name', 'LeaveAsk') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <form class="form-inline d-flex justify-content-center md-form form-sm active-purple active-purple-2 mt-2"  action="{{ route('search') }}" method="GET">
                            <input type="text" class="form-control form-control-sm ml-3 w-75" name="search"  placeholder="&#xF002;   Search" style="font-family:Arial, FontAwesome" style="text-align:center;width:800px;height:25px; margin-top:5px; border: 1px solid #A0AEC0;">
                        </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <a href="{{config('laratrust.panel.go_back_route')}}" class="nav-link" style="color: #388087;">← Go Back</a>
                    <a
                      href="{{ route('laratrust.roles-assignment.index') }}" class="nav-link" style="color: #388087;"
                    >
                      Roles & Permissions Assignment
                    </a>
                    <a
                      href="{{route('laratrust.roles.index')}}"
                      class="nav-link" style="color: #388087;"
                    >
                      Roles
                    </a>
                    <a
                      href="{{ route('users.index') }}"
                      class="nav-link" style="color: #388087;"
                    >
                      Employees
                    </a>
                    <a
                      href="{{ route('departments.index') }}"
                      class="nav-link" style="color: #388087;"
                    >
                      Departments
                    </a>
                    <a
                      href="{{ route('admin_applications') }}"
                      class="nav-link" style="color: #388087;"
                    >
                      Applications
                    </a>
                </div>
            </div>
        </nav>

  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900" style="color: #388087;">
        @yield('title')
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-6xl mx-auto py-6 sm:px-6 lg:px-8">
      @foreach (['error', 'warning', 'success'] as $msg)
        @if(Session::has('laratrust-' . $msg))
        <div class="alert-{{ $msg }}" role="alert">
          <p>{{ Session::get('laratrust-' . $msg) }}</p>
        </div>
        @endif
      @endforeach
      <div class="px-4 py-6 sm:px-0">
        @yield('content')
      </div>
    </div>
  </main>
</div>

</body>
</html>