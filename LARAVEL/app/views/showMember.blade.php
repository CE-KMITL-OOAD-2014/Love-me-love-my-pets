
<html>
	<head>
		<title>My Profile</title>
		<link href = "css/bootstrap.min.css" rel= "stylesheet">
		<link href = "css/styles.css" rel= "stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>

			<div class="container" >
				<div class="row" method="show">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<h2>My Profile</h2><br>
						<div class="col-xs-offset-10"> <button type="button" class="btn btn-link">edit</button> </div>
<p class="col-xs-2">PetImage</div> 	<p class="col-xs-10"> 	<img src = {{"storage/pic/picMember/".$member->getProfilePic()}}  >
						<!--width="800" height="400"-->
																						
																</p>
						<div class="col-xs-2">Username</div> 	{{$member->getUserName()}}<div class="col-xs-10" value = > </div><br><br>
						<div class="col-xs-2">Password</div> 	{{$member->getPassword()}}<div class="col-xs-10" value = "Password"> </div><br><br>
						<div class="col-xs-2">RealName</div> 	{{$member->getRealNameSurName()}}<div class="col-xs-10" name = "RealNameSurname"> </div><br><br>
						<div class="col-xs-2">Age</div> 		{{$member->getAge()}}<div class="col-xs-10" name = "age"> </div><br><br>
						<div class="col-xs-2">Address</div> 	{{$member->getAddress()}}<div class="col-xs-10" name = "address"> </div><br><br>
						<div class="col-xs-2">E-Mail</div> 		{{$member->getEmail()}}<div class="col-xs-10" name = "email"> </div><br><br>
						<div class="col-xs-2">PetName</div> 	{{$member->getPetName()}}<div class="col-xs-10" name = "petName"> </div><br><br>
						<div class="col-xs-2">PetImage</div> 	<p class="col-xs-10"> 	<img src = {{"storage/pic/picPet/".$member->getPetImage()}}  >
						<!--width="800" height="400"-->
																						
																</p>
						<div class="col-xs-offset-10"> <button type="button" class="btn btn-link">Save my profile</button> </div>



					</div>
				</div>
			</div>






	</body>
</html>