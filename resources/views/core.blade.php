<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <title>Aj</title>
        <style type="text/css">
        	.Fjalla{
        		font-family: 'Fjalla One', sans-serif;
        		font-size: 18px;
        	}
        	.noto{
        		font-family: 'Noto Serif', serif;
        		font-size: 18px;
        	}
        	.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
    color: #30c508;
    background-color: transparent;
}
        </style>
    </head>

    <body>
    	<header></header>
    	<div class="container">
    	<div class="row">
		    		<div class="col-md-12" align="center" style="margin-top:25px;">
		<img src="img/logo.png" class="img-responsive">

		<nav class="navbar navbar-default Fjalla" >
		  <div class="container-fluid" >
		    <ul class="nav navbar-nav" style="float: center">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">About</a></li>
		      <li><a href="#">Projects</a></li>
		      <li><a href="#">Resume</a></li>
		      <li><a href="#">Contact</a></li>
		    </ul>
		  </div>
		</nav>

		</div>
    		@section('body')
    		@show
    	</div>
    	</div>
    	<footer></footer>	
    </body>

</html>
