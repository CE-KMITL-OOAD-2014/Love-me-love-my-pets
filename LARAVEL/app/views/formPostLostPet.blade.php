
<html>
  <head>
    <title>Create LostPetPost </title>
    <link href = "/css/bootstrap.min.css" rel= "stylesheet">
    <link href = "/css/styles.css" rel= "stylesheet">
    <link href="/css/modern-business.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>


    <header id="navtop">
      <div class="container">
            <div class="row">
                <div class="dropdown pull-right"><br>
                  <a href="/" class="btn btn-danger" type="button">Home</a>
                   <a href="/lostPetPost" class="btn btn-warning" type="button">Main LostPet Post</a>
                    <a href="/logout" class="btn btn-default" type="button">Log out</a>
              
                </div>
             </div>
             <br>
              <div class="row">
                <div class="col-md-12">
                  <img src="h2.jpg" class="img-responsive">
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
                          <div style="color:#f0ad4e">
                            <h2>+ Create LostPet Post</h2>
                          </div>
                          <br>

                  </div>
              </div>
         
          </div>

          <div class="col-xs-12">
            <form action = "/postedLostPet" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  


            <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ชื่อหัวข้อ</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="subject" class="form-control" required autofocus>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">รายละเอียด</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <textarea type="text"  name="content" rows="5" class="form-control" required autofocus></textarea>
                </div>
              </div>
            </div>


          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ชื่อของสัตว์</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="petName" class="form-control" required autofocus>
                </div>
              </div>
            </div>

          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-sm-2 col-sm-offset-1  control-label">รูปของสัตว์</label>
                <div class="col-sm-10 col-sm-offset-3" >
                <input type="file" name = "petImage" required autofocus >
                </div> <br>
              </div>
          </div>

          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">สถานที่ที่สัตว์หาย</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="location"  class="form-control" required autofocus>
                </div>
              </div>
            </div>


          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ลักษณะที่เด่นชัด</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="uniqueApperance"  class="form-control" required autofocus>
                </div>
              </div>
            </div>

          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">เวลาที่สัตว์หาย</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="timeLost"  class="form-control" required autofocus>
                </div>
              </div>
            </div>

          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">วันที่สัตว์หาย</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input  type="date" name="dateLost"  class="form-control" required autofocus>
                </div>
              </div>
            </div>



           <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ติดต่อกลับ</label>
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="string" name="contact"  class="form-control" required autofocus>
                </div>
              </div>
            </div>

         
           <div class="row">
              <div class="form-group">
             
                <div class="col-xs-11 col-md-6 col-sm-6">
                    <input type="hidden" name="postType"  value="lostPetPost" class="form-control" required autofocus>
                </div>
              </div>
            </div>
                     
    
            <div class="row">
            <div class="form-group">
                <div class="col-md-offset-3 col-sm-offset-3 col-md-4">
                    <input class="btn btn-default"  type="submit" value="Post" >
                </div>
              </div>
            </div>


            </form>
          </div>
      </div>
    </div>


  </body>
 <footer> @include('footer')</footer>
</html>
