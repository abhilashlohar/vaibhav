<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
  <title>{{ config('app.name') }}</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/9d093081ee.js" crossorigin="anonymous"></script>

  
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

 </head>

<body class="dashboard-body" style="font-family: 'Montserrat', sans-serif;">
  <nav class="navbar sticky-top flex-md-nowrap p-0 navbar-custom">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 logo" href="#">{{ config('app.name') }}</a>
    <ul class="nav justify-content-end mr-3">
      <li class="nav-item mr-3" style="padding: 5px; color: #4d384b;">
        <span>Welcome, {{ Auth::user()->name }}</span>
      </li>
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submmit" class="btn btn-sm btn-kelu">Log Out</button>
        </form>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item p-1">
              <a class="nav-link" href="{{ route('dashboard') }}" style="text-align: center;">
                <!-- nav-active -->
                <img src="/img/dashboard.png" style="height: 40px;"><br/>
                <span style=" color: #FEFEFE; font-size: 14px;">  Dashboard </span> 
              </a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link" href="{{route('categories.index')}}" style="text-align: center;">
                <img src="/img/list.png" style="height: 40px;"><br/>
                <span style=" color: #FEFEFE; font-size: 14px;">  Category </span> 
              </a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link" href="{{route('subcategories.index')}}" style="text-align: center;">
                <img src="/img/maintenance.png" style="height: 40px;"><br/>
                <span style=" color: #FEFEFE; font-size: 14px;">  Sub Category </span> 
              </a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link" href="{{route('products.index')}}" style="text-align: center;">
                <img src="/img/product.png" style="height: 40px;"><br/>
                <span style=" color: #FEFEFE; font-size: 14px;">  Product </span> 
              </a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link" href="{{route('enquirylist')}}" style="text-align: center;">
                <img src="/img/enquiry.png" style="height: 40px;"><br/>
                <span style=" color: #FEFEFE; font-size: 14px;">  Enquiry </span> 
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        @yield ('content')
      </main>
    </div>
  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    @yield ('JS_Code')
</body>
</html>