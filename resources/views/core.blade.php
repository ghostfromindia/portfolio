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
        	.circle
    {
    width:100px;
    height:100px;
    border-radius:50px;
    font-size:50px;
    color:#fff;
    line-height:100px;
    text-align:center;
    background:#000

    }
        	.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
    color: #30c508;
    background-color: transparent;
}
        </style>
    </head>

    <body style="overflow: hidden;">
    	<header></header>
    
	{{-- 	<img src="img/logo.png" class="img-responsive">
 --}}
		{{-- <nav class="navbar navbar-default Fjalla" >
		  <div class="container-fluid" >
		    <ul class="nav navbar-nav" style="float: center">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">About</a></li>
		      <li><a href="#">Projects</a></li>
		      <li><a href="#">Resume</a></li>
		      <li><a href="#">Contact</a></li>
		    </ul>
		  </div>
		</nav> --}}

		
    		@section('body')
    		@show
    	
    	<footer></footer>	
    </body>

</html>
