
<html>
	<head>
		<title>Show FindAHome</title>
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


		        <div class="row">
			          <div class="dropdown pull-right"><br>
				          <a href="/" class="btn btn-default" type="button">Home</a>
				          <a href="findAHomePost" class="btn btn-info" type="button">Find A Home Post</a>
				          <a href="helpMePost" class="btn btn-default" type="button">Help Me Post</a>
				          <a href="lostPetPost" class="btn btn-default" type="button">Lost Pet Post</a>
				          <a href="logout" class="btn btn-default" type="button">Log out</a>
				               
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
							<p>Posted on <span class="created_at">{{$thisPost->created_at}}</span> by <a href="#" class="useName">{{$thisPost->userName}}</a> 
						

						<div class="row" method="show">
							<p class="col-xs-12" name = "petImage"> <img src = {{"/storage/pic/picPost/".$thisPost->petImage}} ></p>
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

							<div class="col-xs-5 col-md-4" ><strong>ลักษณะนิสัยของสัตว์</div></strong>	
							<div class="col-xs-7" name = "habit"> {{$thisPost->habit}}</div><br><br>

						</div>
						<div class="row" method="show">

							<div class="col-xs-5 col-md-4" ><strong>ความต้องการพิเศษ</div></strong>		
							<div class="col-xs-7" name = "specificRequire"> {{$thisPost->specificRequire}}</div><br><br>

						</div>
						<div class="row" method="show">
							<div class="col-xs-5 col-md-4" ><strong>ติดต่อกลับ</div></strong>	
							<div class="col-xs-7" name = "contact">{{$thisPost->contact}} </div><br><br>


					
							<div class="col-xs-5 col-md-4" ><strong>สถานะการช่วยเหลือ</div></strong>	
							<div class="col-xs-7" name = "ีstatus"><?php
							if($thisPost->status == 0) {echo "ยังไม่ได้รับการช่วยเหลือ"; }
								else { echo "ได้รับการช่วยเหลือแล้ว ".
								'<div class="col-xs-5 col-md-4" ><strong>สมาชิกที่ให้ความช่วยเหลือ</div></strong>	
							<div class="col-xs-7" name = "ีhelper">'.$thisPost->helper.' </div><br><br>';
							}
							
							?> </div><br><br>

							


						</div>
						

						<section class="section-comment">
							
								<header>
								<hr>
								<h5 class="fleft"><!-- ตัวแปรจำนวน Comment --> N Comments</h5> 
								<p class="fright"><a href="#leavecomment" class="arrow">Leave your comment</a>
								</p></header>
							
								<ol class="comments">
									<li class="comment">
										<h6 name = "userName" >Anpan <span name ="created_at"> on 21/10/2557 </span></h6>
										<p name = "content"> Commentssssssssss </p>
									</li>
									
									<li class="comment">
										<h6 name = "userName"> <span name ="created_at"> on </span></h6>
										<p name = "content"> </p>
									</li>
									
									<li class="comment">
										<h6 name = "userName"> <span name ="created_at"> on </span></h6>
										<p name = "content"> </p>
									</li>
									
									<li class="comment">
										<h6 name = "userName"> <span name ="created_at"> on </span></h6>
										<p name = "content"> </p>
									</li>
									
									<li class="comment">
										<h6 name = "userName"> <span name ="created_at"> on </span></h6>
										<p name = "content"> </p>
									</li>
							
								</ol>
						
							<hr>
							<div class="leavecomment" id="leavecomment">
								<h3>Leave your comment</h3>
								<form class="#" action="#" method="post" name="#">
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
							</div>
							
						</section>
						<hr>


					</div>
				</div>
			</div>

	</body>
</html>