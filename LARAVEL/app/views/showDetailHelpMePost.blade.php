
<html>
	<head>
		<title>Show HelpMe</title>
		<link href = "/css/bootstrap.min.css" rel= "stylesheet">
		<link href = "/css/styles.css" rel= "stylesheet">
		<link href="/css/modern-business.css" rel="stylesheet">
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">

		    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	</head>



	<body>
	
		
		<header id="navtop">
		
			<div class="container">

				<div class="col-xs-12 col-md-12">
					        @include('head')
					    </div>

		        <div class="row">
			          <div class="dropdown pull-right"><br>
					          <a href="/" class="btn btn-default" type="button">Home</a>
				          <a href="/findAHomePost" class="btn btn-default" type="button">Find A Home Post</a>
				          <a href="/helpMePost" class="btn btn-success" type="button">Help Me Post</a>
				          <a href="/lostPetPost" class="btn btn-default" type="button">Lost Pet Post</a>
				        
				               
				               
			          </div>
		         </div>
		    </div>	
		</header>
		<hr>
		
	
			<div class="container" >
				<div class="row" method="show">
					<div class="col-xs-12 col-md-8 col-md-offset-2" >

		

						<div class="row" method="show" >
							<h2><div class="col-xs-8" name = "subject" >{{$thisPost->subject}}</h2></div><br>
							<p>Posted on <span class="created_at">{{$thisPost->created_at}}</span> by <a href={{"/member/".$thisPost->idUser}} >{{$thisPost->userName}}        <img img style = "width:40; height:40px;" src = <?php $mem = \Member::find($thisPost->idUser); echo '"/storage/pic/picMember/'.$mem->profilePic.'"' ; ?>  > </a> 
						

								<div class="row" method="show">
							<p class="col-xs-12" name = "petImage"> <img class="img-responsive" src = {{"/storage/pic/picPost/".$thisPost->petImage}} ></p>
						</div><br>

					<div class="row" method="show">
							<div class="col-xs-5 col-md-4" ><strong>ชื่อของสัตว์</div></strong>  
							<div class="col-xs-7 " name = "petName" >{{$thisPost->petName}}</div><br><br>


							<div class="col-xs-5 col-md-4" ><strong>ชนิดของสัตว์</div></strong>	
							<div class="col-xs-7 " name = "petType"> {{$thisPost->postType}}</div><br><br>

							<div class="col-xs-5 col-md-4" ><strong>รายละเอียด</div></strong>	
							<div class="col-xs-7 " name = "content"> {{$thisPost->content}}</div><br><br>

							<div class="col-xs-5 col-md-4" ><strong>สถานที่</div></strong>		
							<div class="col-xs-7 " name = "location">{{$thisPost->location}} </div><br><br>

							<div class="col-xs-5 col-md-4" ><strong>ความช่วยเหลือที่ต้องการ</div></strong>	
							<div class="col-xs-7" name = "needWhatForHelp">{{$thisPost->needWhatForHelp}}</div><br><br>

						</div>
						
						<div class="row" method="show">
							<div class="col-xs-5 col-md-4" ><strong>ติดต่อกลับ</div></strong>	
							<div class="col-xs-7" name = "contact">{{$thisPost->contact}} </div><br><br>


					
					<div class="col-xs-5 col-md-4" ><strong>สถานะการช่วยเหลือ</div></strong>	
						<div class="col-xs-7" name = "status"><?php
							if($thisPost->status == 0) {echo "ยังไม่ได้รับการช่วยเหลือ"; }

							else { 
								echo "ได้รับการช่วยเหลือแล้ว ".'</div><br><br>'.



								'<div class="col-xs-5 col-md-4" ><strong>สมาชิกที่ให้ความช่วยเหลือ</div></strong>	
							<div class="col-xs-7" name = "ีhelper">'.$thisPost->helper.' <br><br>';
							}
							
							?> </div>


							<br><br>

					</div>
					
						
						<div class="col-xs-12 col-md-8" >

							<section class="section-comment">
							
								<header>
								<hr>
								<h5 class="fleft">{{ count($comments)." Comments" }}</h5> 
								<p class="fright"><a href="#leavecomment" class="arrow">Leave your comment</a>
								</p></header>
							
								<ol class="comments">

								 @foreach($comments as $comment)
									<li class="comment">
								<p name = "content"> {{$comment->content }}</p>
								<p name = "feeling"> feeling: {{$comment->feeling}} </p>
								<a href = {{ "/member/".$comment->idUser}}><img style = "width:100; height:100px;" src = <?php $mem = \Member::find($comment->idUser); echo '"/storage/pic/picMember/'.$mem->profilePic.'"' ; ?> ></p>
								
								<h6 name = "userName" >
								<?php $mem = \Member::find($comment->idUser); echo $mem->userName; ?></a>
								<span name ="created_at"> {{$comment->created_at}}</span></h6>
			
								  @endforeach
								</ol>
						
							<hr>
							<?php if(Auth::check()) {
								echo '<div class="leavecomment" id="leavecomment">
								<h3>Leave your comment</h3>
								<form action= "/helpMePost/'.$thisPost->id.'/commented" method="post" name="#">
									<ul>
								
										<li>
											<label for="feeling">Feeling:</label><br>
											<input type="string" name="feeling"  required  class="required">
										</li>	
										<li>
											<label for="message">Message:</label><br>
											<textarea name="content" type="text"  cols="100" rows="6" required  class="required" ></textarea>
										</li>
										
											<button type="submit"  class="btn btn-default">Comment</button>
										
									</ul>			
								</form>
							</div>';
							}

							?>
						</section>
						<hr>
					</div>

					</div>
				</div>
			</div>

	</body>    <footer> @include('footer')</footer>
</html>