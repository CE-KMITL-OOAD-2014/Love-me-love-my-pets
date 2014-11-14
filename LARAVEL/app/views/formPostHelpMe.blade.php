
<html>
  <head>
    <title>Create HelpMePost </title>
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
                   <a href="/helpMePost" class="btn btn-success" type="button">Main HelpMe Post</a>
                    <a href="/logout" class="btn btn-default" type="button">Log out</a>
              
                </div>
             </div>
             <br>
            <div class="row">
              <div class="col-md-12">
                <img src="h3.jpg" class="img-responsive">
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
                          <div style="color:#5cb85c">
                            <h2>+ Create HelpMe Post</h2>
                          </div>
                          <br>

                  </div>
              </div>
         
          </div>

          <div class="col-xs-12">
            <form action = "/postedHelpMe" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
        


            <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ชื่อหัวข้อ</label>
                <div class="col-xs-11  col-md-6 col-sm-6">
                    <input type="string" name="subject" class="form-control" required autofocus>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">รายละเอียด</label>
                <div class="col-xs-11  col-md-6 col-sm-6">
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
                <div class=" col-sm-10 col-sm-offset-3 " >
                <input type="file" name = "petImage" required autofocus>
                </div> <br>
              </div>
          </div>


          <div class="row">
              <div class="form-group">
                <label class="col-xs-8 col-md-3 col-sm-3 control-label">ชนิดของสัตว์</label>
                  <div class="col-xs-11 col-md-5">

                    <div class="radio">
                      <label>
                          <input type="radio" name="petType"  checked > สัตว์จรจัด
                      </label>
                    </div>
             
                    <div class="radio">
                      <label>
                          <input type="radio"  name="petType"  > สัตว์เลี้ยง
                      </label>
                    </div>
     
                  </div>
              </div>
          </div>


          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">ความช่วยเหลือที่ต้องการ</label>
                <div class="col-xs-11  col-md-6 col-sm-6">
                    <input type="text" name="needWhatForHelp"  class="form-control" required autofocus>
                </div>
              </div>
            </div>


          <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">สถานที่</label>
                <div class="col-xs-11  col-md-6 col-sm-6">
                    <input type="string" name="location"  class="form-control" required autofocus>
                </div>
              </div>
            </div>


    
     

           <div class="row">
              <div class="form-group">
              <label class="col-xs-8 col-md-3 col-sm-3 control-label">สะดวกให้ติดต่อกลับทาง</label>
                <div class="col-xs-11  col-md-6 col-sm-6">
                    <input type="string" name="contact"  class="form-control" required autofocus>
                </div>
              </div>
            </div>

      
           <div class="row">
              <div class="form-group">
              
                <div class="col-xs-11  col-md-6 col-sm-6">
                    <input type="hidden" name="postType"  value = 'helpMePost' class="form-control">
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



  </body> <footer> @include('footer')</footer>
</html>
