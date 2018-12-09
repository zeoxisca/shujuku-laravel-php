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
		  <a class="navbar-brand" href="#">superket-admin</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/this/is/the/admin/real">总览<span class="sr-only">(current)</span></a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li> -->
		     	<ul class="navbar-nav mr">
			    	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          页面
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="/admin/sale">销售情况</a>
			        	<a class="dropdown-item" href="/admin/sale">顾客详情</a>
			        	<a class="dropdown-item" href="/admin/products">商品列表</a>
			          	<a class="dropdown-item" href="/admin/addproduct">添加商品</a>
			        </div>
			      </li>
			    </ul>
		    </ul>

		    <
		    {!!$data!!}
		  </div>
		</nav>
    	
    	<div class="container" style="margin-top:30px;">
    		<div class="row">
    			<div>
		   	    	<div class="row" style="">
				    	<div class="card text-white bg-primary mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">产品总量</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
						<div class="card text-white bg-secondary mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">销售总额</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
						<div class="card text-white bg-success mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">顾客数量</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
					</div>

					<div class="row" style="margin-top:-14px; margin-bottom: 50px;">
				    	<div class="card text-white bg-warning mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">订单总成交量</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
						<div class="card text-white bg-danger mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">日成交量</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
						<div class="card text-white bg-info mb-3" style="min-width: 12rem; max-height: 10rem; margin-right: 3px;">
						  <div class="card-header">日访问量</div>
						  <div class="card-body">
						    <h1 class="card-title display-4 text-right">200</h1>
						  </div>
						</div>
					</div>

					<
				</div>

				<div>

					<div class="list-group" style="margin-left:80px; width: 400px;">
						<h1>最近交易</h1>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">List group item heading</h5>
					      <small>3 days ago</small>
					    </div>
					    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">List group item heading</h5>

					    </div>
					    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

					  </a>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">List group item heading</h5>
					      <small class="text-muted">3 days ago</small>
					    </div>
					    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">List group item heading</h5>
					      <small class="text-muted">3 days ago</small>
					    </div>
					    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					  </a>
					</div>
				</div>

			</div>
		</div>


		<nav class="navbar navbar-dark bg-dark fixed-bottom">
		  <a class="navbar-brand" href="#">
		    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
		    Bootstrap
		  </a>
		</nav>




    
  </body>
</html>



