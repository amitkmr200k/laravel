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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/class.css"> 
    <link rel="stylesheet" href="css/info.css">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="brand">Mindfire Solutions</div>
    <div class="address-bar">BHUBANESWAR | ODISHA | 751010</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <center>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        
                    </ul>
                </div>
            </center>
            <!-- /.navbar-collapse -->
        </div>

        @yield('body');

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
