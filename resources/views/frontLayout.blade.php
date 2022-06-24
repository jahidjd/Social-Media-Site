
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('frontAssets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('frontAssets/css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('frontAssets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontAssets/css/font-awesome.min.css')}}" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('frontAssets/images/fav.png')}}"/>
	</head>
  <style>
    .fileUpload{
      position: absolute;
    top: 0;
    right: 0; /* not left, because only the right part of the input seems to
                 be clickable in some browser I can't remember */
    cursor: pointer;
    opacity: 0.0;
    filter: alpha(opacity=0); /* and all the other old opacity stuff you
                                 want to support */
    font-size: 30px; /* wtf, but apparently the most reliable way to make
                         a large part of the input clickable in most browsers */
    height: 20px;
    }
  </style>
	<body>
        
        <span>
          @yield('menu')
        </span>
        <span>
          @yield('body')
        </span>


	</body>
    </html>

          <!-- Scripts
    ================================================= -->
    <script src="{{asset('frontAssets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('frontAssets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontAssets/js/jquery.appear.min.js')}}"></script>
	<script src="{{asset('frontAssets/js/jquery.incremental-counter.js')}}"></script>
    <script src="{{asset('frontAssets/js/script.js')}}"></script>
    @yield('jQuery');
    