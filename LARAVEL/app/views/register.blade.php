<! DOCTYPE html>
<html>
	<head>
		<title>Reqister!</title>
		<link href = "css/bootstrap.min.css" rel= "stylesheet">
		<link href = "css/styles.css" rel= "stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<blockquote> <p>
	  	Reqister </p>
		</blockquote>

		<div class="container">
			<div class="col-xs-12">
				<form class="form-horizontal" role="form">
		
					<div class="row">
  						<div class="form-group">
   						<label for="inputUsername" class="col-md-2 control-label">Usename</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="name" class="form-control" name="userName" placeholder="นามแฝง">
    						</div>
  						</div>
  					</div>

  					<div class="row">
  						<div class="form-group">
   						<label for="inputPassword" class="col-md-2 control-label">Password</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="name" class="form-control" name="password" placeholder="รหัสผ่าน">
    						</div>
    					</div>
  					</div>




					<div class="row">
  						<div class="form-group">
   						<label for="inputSurname" class="col-md-2 control-label">Name Surname</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="text" class="form-control" id="inputEmail3" name="realNameSurName" placeholder="ชื่อ-นามสกุล">
    						</div>
  						</div>
  					</div>

      <div class="row">
              <div class="form-group">
              <label for="inputAddress" class="col-md-2 control-label">Age</label>
                <div class="col-xs-6 col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="ืที่อยู่">
                </div>
              </div>
            </div>

					<div class="row">
  						<div class="form-group">
   						<label for="inputAddress" class="col-md-2 control-label">Address</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="text" class="form-control" id="inputEmail3" placeholder="ืที่อยู่">
    						</div>
  						</div>
  					</div>

          <div class="row">
              <div class="form-group">
              <label for="inputMail" class="col-md-2 control-label">E-Mail</label>
                <div class="col-xs-6 col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="ex: lovedog@gmail.com">
                </div>
              </div>
            </div>

					<div class="row">
  						<div class="form-group">
   						<label for="inputLocal" class="col-sm-2 control-label">Profile Picture</label>
    						<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse' name="petImage" enctype="multipart/form-data">
							</div>
  						</div>
					</div>

					<div class="row">
  						<div class="form-group">
   						<label for="inputpetName" class="col-md-2 control-label">PetName</label>
    						<div class="col-xs-6 col-md-4">
    							<textarea class="form-control"  name="petName" placeholder="ระบุชื่อสัตว์เลี้ยงของตนเอง (สูงสุด 5 ชื่อ)"></textarea>
    						</div>
  						</div>
  					</div>

				<!--	<div class="row">
  						<div class="form-group">
   						<label for="inputLocal" class="col-sm-2 control-label">Pets Picture</label>
    						<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse'>
							</div> <br>

							<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse'>
							</div><br>

							<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse'>
							</div> <br>
							
							<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse'>
							</div><br>

							<div id='file_browse_wrapper'class="col-sm-offset-2 col-sm-10" >
								<input type='file' id='file_browse'>
							</div><br>

  						</div>
					</div>

-->
					<div class="row">
						<div class="form-group">
			    			<div class="col-sm-offset-2 col-sm-10">
			      				<input class="btn btn-info"  type="button" value="Post">
			    			</div>
			  			</div>
		  			</div>


				</form>
			</div>
		</div>



	</body>
</html>