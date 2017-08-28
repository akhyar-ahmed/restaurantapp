  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Charcoaloo Management Application @yield('title')</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="//unpkg.com/element-ui/lib/theme-default/index.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="../../../../image/logo.jpg" type="image/gif" sizes="16x16">
    
    <style>
        body{
            background-image:url('../../../../../../image/bp2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 0.8;
            color: #f5f5f5;
            font-family: Raleway, sans-serif;
            font-size: 14px;

        }
        .navbar-inverse .navbar-brand{
            color:#eee;
        }


        .navbar-inverse .navbar-nav>li>a{
            color:#eee;
        }
        .table-bordered>tbody>tr:hover {background-color: #211e1d;}
        #item{
            margin-top:2cm;
        }
        .a{
            color: white;
        }
        #edit:hover{
            background-color: transparent;
        }
        #row:hover {background-color: #211e1d;}
        .a:hover{color: black;}

        .nav-tabs>li>a:hover{background-color: #211e1d;}
        .nav-tabs>li>a:visited{background-color: #211e1d;}
        .nav-tabs>li>a:active{background-color: #211e1d;}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
