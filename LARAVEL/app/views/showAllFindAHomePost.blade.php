<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Main Post1</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >

    <div class="container">
            <!--One share for one better life.-->
          <div class="dropdown pull-right"><br>
          <a href="home.html" class="btn btn-warning" type="button">Home</a>
          <a href="mainPost1.html" class="btn btn-info" type="button">Find A Home Post</a>
          <a href="mainPost2.html" class="btn btn-success" type="button">Help Me Post</a>
          <a href="mainPost3.html" class="btn btn-danger" type="button">Lost Pet Post</a>
               
         
          </div>
    </div> 
    <div style ="background-color:#cff5fb">
<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s">
    					<div class="section-heading">
                            <h2>Main Post</h2>
        			        <div style="color:#428bca"><h3>Find A Home Post</h3></div>

                            <div class="row">
                                <div class="col-lg-2 col-lg-offset-5">
                                    <hr class="marginbot-50">
                                </div>
                            </div>
                            <i class="fa fa-2x fa-angle-down"></i>
    					</div>
					</div>
				</div>
      
            <div class="pull-right">
                    <a href="FindAHomePost.html" class="btn btn-primary" type="button">+ Create Post</a>
            </div><br>
        
			</div>
			</div>
		</div>

		<div class="container">
	
            <div class="row" method = "show">


                @foreach($findAHomeposts as $findAHomePost)
                
                <div class="col-xs-6 col-sm-3 col-md-3">
    				<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                         <?php if($findAHomePost->status == 0){
                            echo '<span class="glyphicon glyphicon-remove"></span>';}
                              else {
                                echo '<span class="glyphicon glyphicon-ok">
                                <p class="habit">ผู้ช่วยเหลือ : {{$findAHomePost->helper}} </p>   
                                </span>'; 
                            }
                            ?>
                            <p class="subject">{{$findAHomePost->subject}}</p>
                            <div class="avatar">
                            <img src= {{"storage/pic/picPost/".$findAHomePost->petImage}} class="img-responsive" >
                            </div>
                            <p class="habit">นิสัย : {{$findAHomePost->habit}} </p>
                            <p class="location">สถานที่ : {{$findAHomePost->location}} </p>
                           <div  ><h5>{{$findAHomePost->userName}}</h5></div>
                            <a href="showFindAHome.html" class="btn btn-default">Read more</a>
                        </div>
                    </div>
    				</div>
                </div>
                @endforeach
               
    			
            <br><br>

        
    </div>
	</div>

	</section>
	<!-- /Section: about -->


</body>

</html>
