<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Company Employee Directory">
    <meta name="author" content="Gabriel Lopez">

    <title>Company - Employees </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/round-about.css" rel="stylesheet"> -->
    <link href="{{asset('css/round-about.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>

    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }

    </style>

</head>

<!-- <body class="jaz-back" style="background-image: url({{ URL::asset('images/stripe-tile.png') }})"> -->
<body class="jaz-back">
 <div id="app">
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse jaz-style">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand jaz-text" href="{{ url('/') }}">Company Employee Directory</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                  @yield('header')

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <br>
        @yield('content')
        <!-- Team Members Row -->
    </div>
  </div>
</body>
    <!-- Footer -->
    <footer class="jaz-style footer" style="padding: 2em">
        <div class="container">
            <p class="m-0 text-center text-white jaz-text">Copyright &copy; Company <?php echo date("Y"); ?></p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="vendor/tether/tether.min.js"></script> -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


</html>
