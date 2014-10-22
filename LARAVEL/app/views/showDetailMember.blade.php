
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
        <div class="dropdown pull-right"><br>
         	<div class="row">
                <div class="dropdown pull-right"><br>
                  <a class="btn btn-danger" href=""  type="button">Home</a>
                
                    <a class="btn btn-default" href="logout"  type="button">Log out</a>
              
                </div>
            </div>
               <br>
              <div class="row">
                <div class="col-md-12">
                  <img src="h5.jpg" class="img-responsive">
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

			<div class="col-xs-offset-10"> <button type="button" class="btn btn-link">edit</button> </div>

				<div class="row" method="show">
					<div class="col-xs-8 col-md-4"><strong>Profile Picture</strong></div> 	
						<p class= "col-xs-11 col-md-6" name = "profilePic" > <img src = {{"/storage/pic/picMember/".$thisMember->getProfilePic()}} > </p><br><br>
				</div>

				<div class="row" method="show">



					<div class="col-xs-8 col-md-4" ><strong>Username</strong></div> 	
					<p class="col-xs-11 col-md-6" name = "username" >{{$thisMember->getUserName()}} </p><br><br>

					<!--<div class="col-xs-8 col-md-4"><strong>Password</div></strong>	
					<p class="col-xs-11 col-md-6" name = "Password">{{$thisMember->getPassword()}} </p><br><br>-->

					<div class="col-xs-8 col-md-4" ><strong>RealName</div></strong>	
					<p class="col-xs-11 col-md-6" name = "RealNameSurname">{{$thisMember->getRealNameSurName()}} </p><br><br>

					<div class="col-xs-8 col-md-4"><strong>Age</div></strong>		
					<p class="col-xs-11 col-md-6" name = "age"> {{$thisMember->getAge()}}</p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>Address</div></strong>	
					<p class="col-xs-11 col-md-6" name = "address">{{$thisMember->getAddress()}} </p><br><br>

					<div class="col-xs-8 col-md-4"><strong>E-Mail</div></strong>		
					<p class="col-xs-11 col-md-6" name = "email">{{$thisMember->getEmail()}} </p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>PetName</div></strong>	
					<p class="col-xs-11 col-md-6" name = "petName">{{$thisMember->getPetName()}} </p><br><br>

					<div class="col-xs-8 col-md-4" ><strong>PetImage</div></strong>	
					<p class="col-xs-11 col-md-6" name = "petImage"> <img src = {{"/storage/pic/picPet/".$thisMember->getPetImage()}}  ></p><br><br>

			</div>

					<div class="col-xs-offset-10"> 
					<button type="button" class="btn btn-link">Save my profile</button> </div>
 		

          </div>
         </div>
    </div>
      <hr>
	</body>
</html>