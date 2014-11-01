 <html>
	<head>
  
			<title>Home</title>
			<link href = "css/bootstrap.min.css" rel= "stylesheet">
			<link href = "css/styles.css" rel= "stylesheet">
			<link href="css/modern-business.css" rel="stylesheet">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<!-- -->
	</head>



		

	
	<body>

	
			<!--One share for one better life.-->
        

		<div class="container col-xs-offset-1 col-xs-9 col-sm-9 col-md-9" style="background-color:;">
		 <div class="pull-right">
		@include('head') <br><br>
		</div>
			<div class="row">
			   <section id="intro" class="intro">
				
					<div class="slogan  col-md-offset-1">
						<h1>WELCOME TO <span class="text_color">Love me Love my pets</span> </h1>
						<h4>The social of pet's lover for share the love to the pets all around the world</h4>
					</div>
					<div class="page-scroll">
						<a href="#service" class="btn btn-circle">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
					</div>
			    </section>


			</div>
			<div class="row">
			<div class="col-xs-12">
			<center>

		        <br> 

				<div class="col-md-12 col-xs-9  col-sm-9 ">
					<header id="myCarousel" class="carousel slide" style = "margin:0; width:1200px; height:400px;">
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
			   </center>
			</div>
			</div>

	
			<br><br>
				
		<div class="col-md-12 col-xs-12">
				  <!-- Three columns of text below the carousel -->
			<div class="row">
				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic1.jpg">
				      <h3>Find A Home Post</h3>
				      <p>The lovely pets are waiting for the warm home</p>
				      <p><a class="btn btn-default" href="/findAHomePost">View details »</a></p>
				  </div>

				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic2.jpg">
				      <h3>Help Me Post</h3>
				      <p>Let's help them for their better life</p>
				      <p><a class="btn btn-default" href="/helpMePost">View details »</a></p>
				  </div>

				  <div class="col-md-4 text-center">
				      <img class="img-circle" src="pic3.jpg">
				      <h3>Lost Pet Post</h3>
				      <p>If your pet is lost. Let's post on this topic.</p>
				      <p><a class="btn btn-default" href="/lostPetPost">View details »</a></p>
				  </div>
			</div><!-- /.row -->

		</div>
				  <br><br>
				 
				  <footer> @include('footer')</footer>
		</div>
	
		
    </body>

</html>
