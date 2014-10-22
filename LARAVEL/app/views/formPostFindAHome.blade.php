
<html>
	<head>
		<title>Find A Home Post </title>
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
                  <a href= "/" class="btn btn-danger" type="button">Home</a>
                   <a href="findAHomePost" class="btn btn-primary" type="button">Main Find A Home Post</a>
                    <a href="logout" class="btn btn-default" type="button">Log out</a>
              
                </div>
             </div>
             <br>
            <div class="row">
              <div class="col-md-12">
                <img src="h1.jpg" class="img-responsive">
              </div>

            </div>
      </div>  


    </header>
    <br>

    <div class="container">
    <div class="col-md-8 col-md-offset-1">
          <div class="row">
    
              <div class="wow bounceInDown" data-wow-delay="0.2s">
                  <div class="section-heading">
                          <div style="color:#428bca">
                            <h2>+ Create FindAHome Post</h2>
                          </div>
                          <br>

                  </div>
              </div>
         
          </div>
		<div class="container">
			<div class="col-xs-12">
				<form action="{{ url('/postedFindAHome') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
		


  					<div class="row">
  						<div class="form-group">
   						<label class="col-md-2 control-label">ชื่อหัวข้อ</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="string" name="subject" class="form-control">
    						</div>
    					</div>
  					</div>

  					<div class="row">
  						<div class="form-group">
   						<label class="col-md-2 control-label">รายละเอียด</label>
    						<div class="col-xs-6 col-md-4">
                    <textarea type="text"  name="content" rows="5" class="form-control"></textarea>
    						</div>
    					</div>
  					</div>


					<div class="row">
  						<div class="form-group">
   						<label class="col-md-2 control-label">ชื่อของสัตว์</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="string" name="petName" class="form-control">
    						</div>
  						</div>
  					</div>

          <div class="row">
              <div class="form-group">
              <label class="col-sm-2 control-label">รูปของสัตว์</label>
                <div class="col-sm-offset-2 col-sm-10" >
                <input type="file" name = "petImage" >
                </div> <br>
              </div>
          </div>

          <div class="row">
              <div class="form-group">
                <label class="col-md-2 control-label">ชนิดของสัตว์</label>
                  <div class="col-xs-6 col-md-4">

                    <div class="radio">
                      <label>
                          <input type="radio" name="petType" value=0 checked > สัตว์จรจัด
                      </label>
                    </div>
             
                    <div class="radio">
                      <label>
                          <input type="radio"  name="petType" value=1  > สัตว์เลี้ยง
                      </label>
                    </div>
     
                  </div>
              </div>
          </div>


					<div class="row">
  						<div class="form-group">
   						<label class="col-md-2 control-label">สถานที่</label>
    						<div class="col-xs-6 col-md-4">
      							<input type="string" name="location"  class="form-control">
    						</div>
  						</div>
  					</div>


            <div class="row">
              <div class="form-group">
              <label class="col-md-2 control-label">ลักษณะนิสัยของสัตว์</label>
                <div class="col-xs-6 col-md-4">
                    <input type="string" name= "habit"  class="form-control">
                </div>
              </div>
            </div>

           <div class="row">
              <div class="form-group">
              <label class="col-md-2 control-label">ความต้องการพิเศษ</label>
                <div class="col-xs-6 col-md-4">
                    <input type="text" name= "specificRequire"  class="form-control">
                </div>
              </div>
            </div>


           <div class="row">
              <div class="form-group">
              <label class="col-md-2 control-label">สะดวกให้ติดต่อกลับโดย</label>
                <div class="col-xs-6 col-md-4">
                    <input type="string" name= "contact"  class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group">
              <label class="col-md-2 control-label">ประเภทของการโพสต์</label>
                <div class="col-xs-6 col-md-4">
                    <input type="string" name= "postType"   value="findAHomePost" class="form-control">
                </div>
              </div>
            </div>
   

  
					<div class="row">
						<div class="form-group">
			    			<div class="col-sm-offset-2 col-sm-10">
			      				<input class="btn btn-info"  type="submit" value="Post" >
			    			</div>
			  			</div>
		  			</div>

         

				</form>
			</div>
		</div>



	</body>
</html>