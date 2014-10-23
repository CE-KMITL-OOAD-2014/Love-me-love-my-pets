<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Main Post2</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >

@include('head')
    <div class="container">
        <div class="dropdown pull-right"><br>
            <a href="/" class="btn btn-warning" type="button">Home</a>
          <a href="/findAHomePost" class="btn btn-info" type="button">Find A Home Post</a>
          <a href="/helpMePost" class="btn btn-success" type="button">Help Me Post</a>
          <a href="/lostPetPost" class="btn btn-danger" type="button">Lost Pet Post</a>
                 
          </div>
    </div> 
    <div style ="background-color:#d9fbcf">
<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s">
					<div class="section-heading">
                    <h2>Main Post</h2>
			        <div style="color:#5cb85c"><h3>Help Me Post</h3></div>

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
                <a href="/postHelpMe" class="btn btn-primary" type="button">+ Create Post</a>
            </div><br>

			</div>
			</div>
		</div>
		<div class="container">
	
            <div class="row" method = "show">

             @foreach($helpMePosts as $helpMePost)
                   <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                         <?php if($helpMePost->status == 0){
                            echo '<div style="color:#d9534f"><span class="glyphicon glyphicon-remove"></div></span>';}
                              else {
                                echo '<span class="glyphicon glyphicon-ok">
                                <p class="habit">ผู้ช่วยเหลือ :'. $findAHomePost->helper. '</p>   
                                </span>'; 
                            }
                            ?>
    					   <p class="subject">{{$helpMePost->subject}}</p>
                            <div class="avatar">
                            <img src= {{"storage/pic/picPost/".$helpMePost->petImage}} class="img-responsive" >
                            </div>
                            <p class="Name">ชื่อสัตว์: {{$helpMePost->petName}} </p>
                            <p class="habit">นิสัย : {{$helpMePost->needWhatForHelp}} </p>
                            <p class="location">สถานที่ : {{$helpMePost->location}} </p>
                           <div  ><h5>{{$helpMePost->userName}}</h5></div>
                            <a class="btn btn-default" href={{ "/helpMePost/".$helpMePost->id }} >Read more</a>
                        </div>
                    </div>
    				</div>
                </div>
                      @endforeach
            </div>
    		
            <br><br>

        
    </div>
	</div>

	</section>
	<!-- /Section: about -->


</body>

</html>
