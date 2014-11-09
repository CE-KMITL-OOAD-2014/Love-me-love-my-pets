 <html>
	<head>
  
			<title>Home</title>
			<link href = "/css/bootstrap.min.css" rel= "stylesheet">
			<link href = "/css/styles.css" rel= "stylesheet">
			<link href="/css/modern-business.css" rel="stylesheet">
 	

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	



    <!-- Owl Carousel Assets -->
	    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	    <link href="owl-carousel/owl.theme.css" rel="stylesheet">

		 <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    

	</head>

	<body>
	

		<!--One share for one better life.-->
        <div class="row">
        <div class="col-md-10 col-xs-12">
        @include('head') <br></div></div>

		<div class="container col-xs-offset-0 col-xs-12 col-sm-12 col-md-12">
				
				<div class="row">
				   <section id="intro" class="intro">
						<div class="slogan  col-xs-12 col-md-offset-2">
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

					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div id="demo">
       						 <div class="container">
					          <div class="row">
					            <div class="span12">
					              <div id="owl-demo" class="owl-carousel">
					                <div class="item"><img src="d.jpg" ></div>
					                <div class="item"><img src="b.jpg" ></div>
					                <div class="item"><img src="c.jpg" ></div>
					               
					              </div>
					            </div>
					          </div>
					        </div>
					  	</div>
			

					<script src="/js/jquery-1.9.1.min.js"></script> 
				    <script src="/owl-carousel/owl.carousel.js"></script>

					  

					 <style>
					    #owl-demo .item img{
						    display: block;
						    width: 100%;
						    height: auto;
						}
				    </style>


				    <script>
						$(document).ready(function() {
			 
							  $("#owl-demo").owlCarousel({
							 
							      navigation : true, // Show next and prev buttons
							      slideSpeed : 300,
							      paginationSpeed : 400,
							      singleItem:true
							 
							      // "singleItem:true" is a shortcut for:
							      // items : 1, 
							      // itemsDesktop : false,
							      // itemsDesktopSmall : false,
							      // itemsTablet: false,
							      // itemsMobile : false
							 
							  });
							});
				    </script>
			<br><br>
			</div>
		
											
				


				
				
		
				
					
			
					  <!-- Three columns of text below the carousel -->
			<div class="row">

				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

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
				</div> <!-- /.row -->
			</div>
			
					  <footer> @include('footer')</footer>
		</div>
	

    </body>

</html>
