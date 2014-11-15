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
							<font style="color:#FF0066"><h1><b>WELCOME TO </font> Love me Love my pets 

<div class="glyphicon glyphicon-heart" style="color:#FF0066" >

</div></h1>
					
							 </b>
							<h4>The social of pet's lover for share the love to the pets all around the world</h4>
							<div style="color:#FF0066"><h4>สังคมของคนรักสัตว์ที่จะร่วมกันแบ่งปันความรักไปให้สัตว์ อย่างไม่สิ้นสุด</h4></div>
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
							      singleItem:true,
							 	autoPlay: 3000
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
					     <font style="color:#FF0066">  <h3>Find A Home Post 
<div class="glyphicon glyphicon-home" style="color:#FF0066" >
</div>
					     </h3></font>
					      <h3>หัวข้อ หาบ้านให้สัตว์น้อย</h3>
					      <p>มีสัตว์อีกมากมายที่รอคอยความรัก ความอบอุ่น จากอ้อมกอดของคุณอยู่ อย่ารอช้าที่จะแบ่งปันความรักไปให้เขา</p>
					      <p><a class="btn btn-info" href="/findAHomePost">View details »</a></p>
					  </div>

					  <div class="col-md-4 text-center">
					      <img class="img-circle" src="pic2.jpg">
					     <font style="color:#FF0066">  <h3>Help Me Post

					     <div class="glyphicon glyphicon-volume-up" style="color:#FF0066" >
</div></h3></font>
					      <h3>หัวข้อ สัตว์ขอความช่วยเหลือ</h3>
					      <p>มีสัตว์มากมาย รอคอยความช่วยเหลือของคุณอยู่ อย่าให้เขารอเก้อ ไปช่วยสัตว์เหล่านี้กันเถอะ!</p>
					      <p><a class="btn btn-info" href="/helpMePost">View details »</a></p>
					  </div>

					  <div class="col-md-4 text-center">
					      <img class="img-circle" src="pic3.jpg">
					   <font style="color:#FF0066">  <h3>Lost Pet Post
					   <div class="glyphicon glyphicon-eye-open" style="color:#FF0066" >
</div></h3></font>
					      <h3>หัวข้อ ประกาศสัตว์หาย</h3>
					      <p>หากคุณเห็นสัตว์น้อยหน้าใหม่ เดินเข้ามาในละแวกบ้านคุณ นั่นอาจเป็นสัตว์เลี้ยงแสนรักของใครสักคน ที่กำลังตามหาเขาอยู่ แวะเข้ามาดูกันนะ</p>
					      <p><a class="btn btn-info" href="/lostPetPost">View details »</a></p>
					  </div>
				</div> <!-- /.row -->
			</div>
			
					  <footer> @include('footer')</footer>
		</div>
	

    </body>

</html>
