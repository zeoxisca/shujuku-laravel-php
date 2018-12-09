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
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="查找蔬菜" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">查找蔬菜</button>
		    </form>
		    <ul class="navbar-nav mr">
		    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          not logined
		        </a>
		        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">login</a>
		        </div>
		      </li>
		    </ul>
		  </div>
		</nav>
    
    	<!-- 轮播图 -->
    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 1000px; margin: auto; margin-top:10px;">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="./img/w.jpg" alt="First slide" style="width: 1000px;height: 500px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="./img/w.jpg" alt="Second slide" style="width: 1000px;height: 500px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="./img/w.jpg" alt="Third slide" style="width: 1000px;height: 500px;">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容</p>
	                  <a  href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='img-thumbnail rounded' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容2222这里是描述内容22222这里是描述内容22222这里是描述内容222这里是描述内容2222</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容3333这里是描述内容3333这里是描述内容33333这里是描述内容222这里是描述内容3333</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容</p>
	                  <a  href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>

	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容2222这里是描述内容22222这里是描述内容22222这里是描述内容222这里是描述内容2222</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容3333这里是描述内容3333这里是描述内容33333这里是描述内容222这里是描述内容3333</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容这里是描述内容</p>
	                  <a  href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>

	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容2222这里是描述内容22222这里是描述内容22222这里是描述内容222这里是描述内容2222</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容3333这里是描述内容3333这里是描述内容33333这里是描述内容222这里是描述内容3333</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
	          <div class="col-md-3">
	              <a href="#" class="thumbnail">
	                  <img src="img/w.jpg" class='rounded img-thumbnail' style="height:180px;width:100%;display: block">
	              </a>
	              <div class="caption" style="margin-top:5px;">
	                  <h3>这里是图文标题</h3>
	                  <p>这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444这里是描述内容4444</p>
	                  <a href="#" class="btn btn-primary">开始学习</a>
	                  <a  href="#" class="btn btn-info">正在学习</a>
	              </div>
	          </div>
			</div>
		</div>


		<nav class="navbar navbar-dark bg-dark" style="margin-top: 80px;">
		  <a class="navbar-brand" href="#">
		    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
		    Bootstrap
		  </a>
		</nav>




    
  </body>
</html>



