
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>My Hospital</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">  

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
  

  <!-- Back to top button -->
<div class="back-to-top"></div>

   <header>
    <!--<div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> 
      </div>
    </div>  -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">My</span> Hospital</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'appointdr'}}">Appoint</a>
            </li>
            

            @if(Route::has('login'))

            @auth
            <style>
              #abc:hover{
                background-color:grey;
                border-radius:5px;
              }
            </style>

            <li class="nav-item" style="background-color:#00d9a5; color:black; border-radius:5px; ">
              <a href="{{url('myappointment')}}" class="nav-link hover-item" id="abc" style="color:white;">My appointments</a>
            </li>
            
            <x-app-layout>
            </x-app-layout>


            @else

            


            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div class="container py-5">
     
  <table class="table table-striped py-5">
    <thead>
      <tr align="center">
        <th>Doctor Name</th>
        <th>Date</th>
        <th>Message</th>
        <th>Status</th>
        <th>Cancel Appointment</th>
      </tr>
    </thead>

    @foreach ($appoint as $app)

    <tbody>
      <tr align="center">
        <td>{{$app->doctor}}</td>
        <td>{{$app->date}}</td>
        <td>{{$app->message}}</td>
        <td>{{$app->status}}</td>   
        @if($app->status != 'Approved' && $app->status != 'canceled' )
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to detele appointment?')" href="{{url('cancel_appoint',$app->id)}}">Cancel</a></td>
        @else
        <td> </td>
      </tr>
      @endif
      
    </tbody>

    @endforeach
  </table>
</div>



  

</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
