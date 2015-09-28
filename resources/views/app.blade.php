<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel tutorial</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		

		<div class="container">

			<!--navigation-->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Project name</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						


						<ul class="nav navbar-nav">
							<li class=""><a href="/home">Home</a></li>
							<li class=""><a href="/about">About</a></li>
							<li class=""><a href="/contact">Contact</a></li>
						</ul>


					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
			<!--end navigation-->

			<!--header-->
			<div class="jumbotron">
				<h1>Learning Laravel</h1> 
				<p>this is my setup to learn laravel</p> 
			</div>
			<!--end header-->

			<!--page contents-->
			@yield('content')
			<!--end page contents-->


		</div>
    
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>