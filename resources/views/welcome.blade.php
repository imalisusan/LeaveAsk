@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
body{
    @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    overflow: none;
    background-color: #F6f6f2;
    font-family: 'Nunito', sans-serif;
}

/*Section*/
.custom-section
{
    width: inherit;
    padding: 40px 0;

    @media screen and(width: 991.98px)
    {
        flex-direction: column-reverse;
    }
}

.custom-section col-lg-4
{
    margin-top: 100px;
}

.custom-section col-lg-4 h2
{
    font-weight: 700;
    font-size: 63px;
    color: #000;
    margin-bottom: 0;
    line-height: 1;
    white-space: nowrap;
}

.custom-section col-lg-4 h3
{
    font-weight: 300;
    font-size: 64px;
    color: #000;
    line-height: 1;
}

.custom-section col-lg-4 p
{
    color: #000000;
    font-size: 14px;
    margin-top: 30px;
}

.custom-section col-lg-4 a
{
    display: inline-block;
    padding: 8px 22px;
    color: #fff;
    background-color: #1ea5f7;
    border: 1px solid transparent;
    margin-top: 60px;
    text-decoration: none;
    transition: .5s cubic cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.custom-section col-lg-4 a::hover
{
    color: #1ea5f7;
    background-color:#ffffff;
    border: 1px solid #1ea5f7;
}

.custom-section col-lg-8 img
{
    width: 100%;
    position: absolute;
    top: -14rem;
    right: -11%;
    @media screen and (max-width:991.98px){
        width: 100%;
        position: relative;
        top: 0;
        right:0;
        
    }
}
    </style>
  </head>
  <body style="background-color: #F6f6f2;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-4">
                <h2 style="color: #388087;font-family: 'Nunito', sans-serif;">LeaveAsk</h2><br><br>
                <h5 style="font-family: 'Nunito', sans-serif;">Ranked #1 in Kenya in Leave Management</h5>
                <p style="font-family: 'Nunito', sans-serif;">A system that enables employees of a given company to apply for leave, get leave approvals and check on their remaining leave days. Administrators can monitor employee leave applications and approve or reject leave very easily</p><br>
                <a class="btn btn-outline-secondary btn-rounded"  data-mdb-ripple-color="dark" style="font-family: 'Nunito', sans-serif;" href="{{ route('home') }}">{{ __('Get Started') }}</a>

            </div>
            <div class="col-12 col-lg-8">
                <img src="uploads/avatars/homepage.svg" alt="Team Process Banner" style="width:90%; height:40%;">
            </div>
        </div>
    </div>
  </body>
</html>

@endsection