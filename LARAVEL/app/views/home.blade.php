 <html>
	<head>
  
			<title>Home</title>
			<link href = "css/bootstrap.min.css" rel= "stylesheet">
			<link href = "css/styles.css" rel= "stylesheet">
			<link href="css/modern-business.css" rel="stylesheet">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



	</head>
	<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<!-- -->
	



	</head>
	<body>

		<div class="container">
			<!--One share for one better life.-->
          <div class="dropdown pull-right"><br>
          <a href="/register" class="btn btn-warning" type="button">Register</a>
  				<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Sign In
    			<!-- caret is arrow -->
    			<span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu" style="width:340px" >
     				 
	     		
	              <div class="col-md-12">
	                <form action= "{{ url('/logined') }}" class="form-signin" role="form"  method="post" >
	                  <h2 class="form-signin-heading">Please sign in</h2>

	                  <input type="text" name="userName" class="form-control" placeholder="username" >
	                  <input type="password" name="Password"  class="form-control" placeholder="Password" > <br>
	          	
	                  <button class="btn btn-lg btn-primary btn-block" type="submit">login</button>
	                </form>
	              </div>
	            
          		</ul>

			
          </div>
		</div> 

		 <hr>

		<div class="container col-md-offset-1 col-md-9" style="background-color:;">
			<div class="row">
			   <section id="intro" class="intro">
				
					<div class="slogan  col-md-offset-1">
						<h1>WELCOME TO <span class="text_color">Love me Love my pets</span> </h1>
						<h4>WE ARE GROUP OF GENTLEMEN MAKING AWESOME WEB WITH BOOTSTRAP</h4>
					</div>
					<div class="page-scroll">
						<a href="#service" class="btn btn-circle">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
					</div>
			    </section>


			</div>
			<div class="row">

		        <br> 

				<div class="col-md-12">
				<header id="myCarousel" class="carousel slide" style = "margin:0; width:1300px; height:433px;">
			        <!-- Indicators -->
			        <ol class="carousel-indicators">
			            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			            <li data-target="#myCarousel" data-slide-to="1"></li>
			            <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>

			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" >
			            <div class="item active">
			                <div class="fill" style="background-image:url('d.jpg');"></div>
			                <div class="carousel-caption">
			                    <h2> </h2>
			                </div>
			            </div>
			            <div class="item">
			                <div class="fill" style="background-image:url('b.jpg');"></div>
			                <div class="carousel-caption">
			                    <h2> </h2>
			                </div>
			            </div>
			            <div class="item">
			                <div class="fill" style="background-image:url('c.jpg');" ></div>
			                <div class="carousel-caption">
			                    <h2> </h2>
			                </div>
			            </div>
			        </div>

			        <!-- Controls -->
			        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			            <span class="icon-prev"></span>
			        </a>
			        <a class="right carousel-control" href="#myCarousel" data-slide="next">
			            <span class="icon-next"></span>
			        </a>
			    </header>
			   </div>
			</div>

	
			<br><br>
				

				  <!-- Three columns of text below the carousel -->
			<div class="row">
				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic1.jpg">
				      <h3>Find A Home Post</h3>
				      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
				      <p><a class="btn btn-default" href="mainPost1.html">View details »</a></p>
				  </div>

				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic2.jpg">
				      <h3>Help Me Post</h3>
				      <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
				      <p><a class="btn btn-default" href="mainPost2.html">View details »</a></p>
				  </div>

				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic3.jpg">
				      <h3>Lost Pet Post</h3>
				      <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
				      <p><a class="btn btn-default" href="mainPost3.html">View details »</a></p>
				  </div>
			</div><!-- /.row -->

				  <br>
				  <hr>

		</div>
	
		
    </body>

</html>
