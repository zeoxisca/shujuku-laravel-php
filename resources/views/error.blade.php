<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <title>Hello, world!</title>

    <style type="text/css">
		.caption > p{
			height: 60px;
			overflow: hidden;
			font-size: 14px;
		}

	</style>

  </head>


  <body>

  		<!-- nav-bar 固定，黑色 -->
	  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">蔬菜订购superket</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">所有产品 <span class="sr-only">(current)</span></a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li> -->
		      
		    </ul>


		  </div>
		</nav>

	  	<div class="jumbotron container" style="margin-top:30px;">
		  <h1 class="display-4">{{$error['error']}}</h1>
		  <p class="lead">{{$error['msg']}}</p>
		  <hr class="my-4">
		  <a class="btn btn-primary btn-lg" href="{{$error['tmp_url']}}" role="button">Go on</a>
		</div>
  </body>
</html>



