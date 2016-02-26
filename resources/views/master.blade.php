<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <!-- jqgrid theme start-->
    <link rel='stylesheet' type='text/css' media='screen' href='css/jqgrid_theme/theme.css' />
    <link rel="stylesheet" type="text/css" media="screen" href="css/ui.jqgrid.css" />
    <!-- jqgrid theme end -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/class.css"> 
    <link rel="stylesheet" href="css/info.css">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body id="app-layout">
    <div class="brand">Mindfire Solutions</div>
    <div class="address-bar">BHUBANESWAR | ODISHA | 751010</div>
    
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/registration') }}">Register</a></li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-left">
                   <li><a href="{{ url('/home') }}">Home</a></li>
                   <li><a href="{{ url('/edit_profile') }}">Edit profile</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right"> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
            @endif
            
        </div>
    </div>
</nav>

@yield('body')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; Your Website <span id="year"></span></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

<!-- jq grid -->
<script src="js/grid.locale-en.js" type="text/javascript"></script>   
<script src="js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="js/admin_section_jqgrid.js?version=2311" type="text/javascript"></script>

<!-- -->
<script type="text/javascript" src="js/image_preview.js"></script>
<script type="text/javascript" src="js/edit_profile_validation.js?version=126"></script>
<!--     // <script type="text/javascript" src="js/registration_validation_jquery.js"></script> -->
<script type="text/javascript" src="js/login_validation_jquery.js?version=1231"></script>  
<script type="text/javascript" src="js/same_permanent.js?version=123"></script>
<script type="text/javascript" src="js/date.js?version=13"></script>
</body>
</html>
