
<html>
	<head>
		<title>Register</title>
		<link href = "css/bootstrap.min.css" rel= "stylesheet">
		<link href = "css/styles.css" rel= "stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		


    <header id="navtop">
    
      <div class="container">


            <div class="row">
                <div class="dropdown pull-right"><br>
                  <a href="/" class="btn btn-warning" type="button">Home</a>
              
                </div>
             </div>
             <br>
               <div class="row">
              <div class="col-md-12">
                <img src="h0.jpg" class="img-responsive">
              </div>

            </div>
        </div>  
        <br>
    </header>
  

    <div class="container">
    <div class="col-md-8 col-md-offset-1">
          <div class="row">
    
              <div class="wow bounceInDown" data-wow-delay="0.2s">
                  <div class="section-heading">
                          <div style="color:#f0ad4e"><h2>Register</h2></div>
                          <br>

                  </div>
              </div>
         
          </div>

    			<div class="col-xs-12">
    				<form action="{{ url('/registered') }}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
    		
    					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">Usename</label>
        						<div class="col-xs-8 col-md-5">
          							<input type="string" name="userName" class="form-control" placeholder="นามแฝง" >
        						</div>
      						</div>
      					</div>

      					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">Password</label>
        						<div class="col-xs-8 col-md-5">
          							<input type="password" name="Password" class="form-control" placeholder="รหัสผ่าน" >
        						</div>
        					</div>
      					</div>

      					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">Realname</label>
        						<div class="col-xs-8 col-md-5">
          							<input type="string" name="realNameSurName" class="form-control" placeholder="ชื่อ-นามสกุล">
        						</div>
        					</div>
      					</div>


    					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">Age</label>
        						<div class="col-xs-8 col-md-5">
          							<input type="int" name="age" class="form-control" placeholder="อายุ">
        						</div>
      						</div>
      					</div>


    					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">Address</label>
        						<div class="col-xs-8 col-md-5">
          							<input type="string" name="address"  class="form-control" placeholder="ที่อยู่">
        						</div>
      						</div>
      					</div>

               <div class="row">
                  <div class="form-group">
                  <label class="col-xs-8 col-md-2 control-label">E-Mail</label>
                    <div class="col-xs-8 col-md-5">
                        <input type="string" name="email"  class="form-control" placeholder="ex: lovedog@gmail.com">
                    </div>
                  </div>
                </div>

    					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-md-2 control-label">PetName</label>
        						<div class="col-xs-8 col-md-5">
                      <input type="string" name="petName"  class="form-control" placeholder="ชื่อสัตว์เลี้ยง">
        						</div>
      						</div>
      					</div>


    					<div class="row">
      						<div class="form-group">
       						<label class="col-xs-8 col-sm-2 control-label">Pets Image</label>
        						<div class="col-sm-offset-2 col-sm-10" >
    								<input type='file' name = "petImage" >
    							</div> <br>
      						</div>
    					</div>

              <div class="row">
                  <div class="form-group">
                  <label class="col-xs-8 col-sm-2 control-label">Profile Picture</label>
                    <div class="col-sm-offset-2 col-sm-10" >
                    <input type='file' name = "profilePic" >
                  </div> <br>
                  </div>
              </div>


              <div class="row">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-default"   type="submit" value="OK" >
                    </div>
                  </div>
                </div>


    				</form>
    			</div>
      </div>
		</div>



	</body>
</html>