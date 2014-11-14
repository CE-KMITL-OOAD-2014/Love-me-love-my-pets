<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lost Pet Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div class="col-xs-12 col-md-12">
        @include('head')
    </div>

    <div class="container">
            <!--One share for one better life.-->
          <div class="dropdown pull-right"><br>
       <a href="/" class="btn btn-warning" type="button">Home</a>
          <a href="/findAHomePost" class="btn btn-info" type="button">Find A Home Post</a>
          <a href="/helpMePost" class="btn btn-success" type="button">Help Me Post</a>
          <a href="/lostPetPost" class="btn btn-danger" type="button">Lost Pet Post</a>
            
               
            
          </div>
    </div> 
   

    <div style ="background-color:#fbcfd0">



<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s">
					<div class="section-heading">
                    <h2>Main Post</h2>
			        <div style="color:#d9534f"><h3>Lost Pet Post</h3></div>
              <div style="color:#d9534f"><h3>[โพสต์ตามหาสัตว์เลี้ยง]</h3></div>
              <i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>

            <div class="pull-right">
                <a href="/postLostPet" class="btn btn-primary" type="button">+ Create Post</a>
            </div><br>

			</div>
			</div>
		</div>

		<div class="container">


           <?php
           $t=1;
           ?>

	         @foreach($lostPetPosts as $lostPetPost)


           @if($t%4==1)
           <div class="row" method = "show">
           @endif

              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                         <?php if($lostPetPost->status == 0){
                           if(Auth::check()){ echo'<form action="/helpedPost" method="POST">
                              <input type="hidden" name = "postType" value="lostPetPost">
                              <input type="hidden" name = "id" value='. $lostPetPost->id.' >
                            <div style="color:#d9534f"><font size="20"><button class="glyphicon glyphicon-remove" type="submit" value="Submit">
                            </button></font></div></form>';
              }else {
                echo '<div style="color:#d9534f"><font size="20"><span class="glyphicon glyphicon-remove"></span></font></div>';
              }
                            
                        }
                              else {
                                echo '<div style="color:#01DF01"><font size="20"><span class="glyphicon glyphicon-ok">
                                <p class="habit">ผู้ช่วยเหลือ:'.$lostPetPost->helper.'</p>   
                                </span></font></div>'; 
                            }
                            ?>
                           <p class="subject">{{$lostPetPost->subject}}</p>
                            <div class="avatar">
                            <img style = class="img-responsive" src= {{"storage/pic/picPost/".$lostPetPost->petImage}} class="img-responsive" >
                            </div>
                            <p class="Name">ชื่อสัตว์: {{$lostPetPost->petName}} </p>
                            <p class="habit">ลักษณะเด่นชัด : {{$lostPetPost->uniqueApperance}} </p>
                            <p class="location">สถานที่ที่หาย : {{$lostPetPost->location}} </p>
                          
                           <a href = {{'/member/'.$lostPetPost->idUser}}><h5><center>
                                <img class="media-object img-circle" style = "width:60; height:60px;" src = <?php $mem = \Member::find($lostPetPost->idUser); echo '"/storage/pic/picMember/'.$mem->profilePic.'"' ; ?> >{{$lostPetPost->userName}}</h5>
                         
                            </center></a> 
                            <a  class="btn btn-primary btn-sm " target="_blank"
                                href={{'"http://www.facebook.com/sharer.php?u= 23.101.30.133/lostPetPost/'.$lostPetPost->id.'"'}}>
                                     <font size="4"> <i class="fa fa-facebook-square fa-5"></i></font>
                                 Share
                            </a>
                            <a class="btn btn-default" href={{ "/lostPetPost/".$lostPetPost->id }} >Read more</a>
                        </div>
                    </div>
                    </div>
                </div>


        @if($t%4 == 0)
        </div>
        <br><br>
        @endif
               <?php
               $t++;
               ?>  

         
            @endforeach
        
   
	</div>

	</section>
	<!-- /Section: about -->
</div>


</body>
<footer>@include('footer')</footer>
</html>
