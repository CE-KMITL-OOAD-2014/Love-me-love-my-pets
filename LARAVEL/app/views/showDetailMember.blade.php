
<html>
	<head>
		<title>My Profile</title>
		<link href = "/css/bootstrap.min.css" rel= "stylesheet">
		<link href = "/css/styles.css" rel= "stylesheet">
		<link href="/css/modern-business.css" rel="stylesheet">
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>

	
	<div class="container">
        
         	@include ('head');
         	    <div class="container">
        <div class="col-xs-12 col-md-12">
            <!--One share for one better life.-->
            <div class="dropdown pull-right"><br>
              <a href="/" class="btn btn-warning" type="button">Home</a>
              <a href="/findAHomePost" class="btn btn-info" type="button">Find A Home Post</a>
              <a href="/helpMePost" class="btn btn-success" type="button">Help Me Post</a>
              <a href="/lostPetPost" class="btn btn-danger" type="button">Lost Pet Post</a>      
            </div> 
        </div>
    </div> 
               <br>
              <div class="row">
                <div class="col-md-12">
                  <img src="/h5.jpg" class="img-responsive">
                </div>
            </div>
               
          </div>
    </div> 

	<div class="container">
    <div class="col-md-8 col-md-offset-1">
          <div class="row">
    
              <div class="wow bounceInDown" data-wow-delay="0.2s">
                  <div class="section-heading">
                          <div style="color:#f0ad4e"><br>
                            <h2>My Profile</h2>
                          </div>
                          <br>

                  </div>
              </div>
         
          </div>

          <div class="col-xs-12">

          <?php 

          if(Auth::check())if(Auth::user()->id==$thisMember->id) echo '
			<div class="col-xs-offset-10"> 
			<a class="btn btn-danger" href="/editProfile" type="button" >edit</a> </div>';

			?>
				

				<div class="row" method="show">
					<div class="col-xs-8 col-md-4"><strong>Profile Picture</strong></div> 	
						<p class= "col-xs-11 col-md-6" name = "profilePic" > <img class="img-responsive" src = {{"/storage/pic/picMember/".$thisMember->profilePic}} > </p><br><br>
				</div>

				<div class="row" method="show">



					<div class="col-xs-8 col-md-4" ><strong>Username</strong></div> 	
					<p class="col-xs-11 col-md-6" name = "username" >{{$thisMember->userName}} 

					<div class="col-xs-8 col-md-4" ><strong>RealName</div></strong>	
					<p class="col-xs-11 col-md-6" name = "RealNameSurname">{{$thisMember->realNameSurName}} </p><br><br>

					<div class="col-xs-8 col-md-4"><strong>Age</div></strong>		
					<p class="col-xs-11 col-md-6" name = "age"> {{$thisMember->age}}</p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>Address</div></strong>	
					<p class="col-xs-11 col-md-6" name = "address">{{$thisMember->address}} </p><br><br>

					<div class="col-xs-8 col-md-4"><strong>E-Mail</div></strong>		
					<p class="col-xs-11 col-md-6" name = "email">{{$thisMember->email}} </p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>PetName</div></strong>	
					<p class="col-xs-11 col-md-6" name = "petName">{{$thisMember->petName}} </p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>PetImage</div></strong>	
					<p class="col-xs-11 col-md-6" name = "petImage"> <img class="img-responsive" src = {{"/storage/pic/picPet/".$thisMember->petImage}}  ></p><br><br>

			</div>

 		

          </div>
         </div>
    </div>
      <hr>
	</body>    <footer> @include('footer')</footer>
</html>