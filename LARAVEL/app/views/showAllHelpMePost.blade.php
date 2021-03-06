<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Help Me Post</title>

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

    <div class="col-xs-12 col-md-12">
        @include('head')
    </div>

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
              <div style="color:#5cb85c"><h3>[โพสต์ขอความช่วยเหลือ]</h3></div>
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
	       
        <?php
         $t=1;
         ?>
        
          
             @foreach($helpMePosts as $helpMePost)
       
         @if($t%4==1)

         <div class="row" method = "show">
         @endif
            
                <div class="col-xs-12 col-sm-3 col-md-3" style="float: left; word-break: break-word;">
                  <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                    <div class="inner">
        
              <?php 
              
              if($helpMePost->status == 0){
                          if(Auth::check()){ echo'<form action="/helpedPost" method="POST">
                              <input type="hidden" name = "postType" value="helpMePost">
                              <input type="hidden" name = "id" value='. $helpMePost->id.' >
                            <div style="color:#d9534f"><font size="20"><button class="glyphicon glyphicon-remove" type="submit" value="Submit">
                            </button></font></div></form>';
              }else {
                echo '<div style="color:#d9534f"><font size="20"><span class="glyphicon glyphicon-remove"></span></font></div>';
              }
                            
                        }
                              else {
                                echo '<div style="color:#01DF01"><font size="20"><span class="glyphicon glyphicon-ok">
                                <p class="habit">ผู้ช่วยเหลือ:'.$helpMePost->helper.'</p>   
                                </span></font></div>'; 
                            }                            

                     ?>
    					           <p class="subject">{{$helpMePost->subject}}</p>
                          <div class="avatar">
                            <img src= {{"storage/pic/picPost/".$helpMePost->petImage}} class="img-responsive" >
                          </div>
                          <p class="Name"><b>ชื่อสัตว์:</b> {{$helpMePost->petName}} </p>
                          <p class="habit"><b>ความต้องการ :</b> {{$helpMePost->needWhatForHelp}} </p>
                           <p class="location"><b>สถานที่ :</b> {{$helpMePost->location}} </p>
                          <div><a href = {{'/member/'.$helpMePost->idUser}}><h5><center><img class="media-object img-circle" style = "width:60; height:60px;" src = <?php $mem = \Member::find($helpMePost->idUser); echo '"/storage/pic/picMember/'.$mem->profilePic.'"' ; ?> >{{$helpMePost->userName}}</h5>
                          </center></div></a> 
                          <a  class="btn btn-primary btn-sm " target="_blank"
                                href={{'"http://www.facebook.com/sharer.php?u= 23.101.30.133/helpMePost/'.$helpMePost->id.'"'}}>
                                      <font size="4"> <i class="fa fa-facebook-square fa-6"></i></font>
                                 Share
                          </a>
                          <a class="btn btn-default" href={{ "/helpMePost/".$helpMePost->id }} >Read more</a>
                        
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
	 </div>

	 </section>
	<!-- /Section: about -->

</div>

</body>
<footer>@include('footer')</footer>
</html>
