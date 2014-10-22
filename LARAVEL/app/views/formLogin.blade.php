<html>
    <head>
    <meta charset=utf-8>
    <title>Log In</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
      <script src = "js/bootstrap.js"></script>
    </head>
    

    <body background=12.jpg width="100%" height="100%">

            <div class="modal-dialog" >
                <div style="background-color:#" class="well well-lg" > 
                <div style="background-color:#" class= "modal-body">  
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h1 class="text-center">LOG IN <br>
                       <h3 class="text-center">Love me love my pets</h3>
                    </h2></div>

                        <form action = "{{ url('/logined') }}" class="col-md-12" method = "post">
                              <div class="form-group">
                                <input type="text" class="form-control input-lg" name="userName" placeholder="Username">
                              </div>

                              <div class="form-group">
                                 <input type="password" class="form-control input-lg" name = "password" placeholder="Password">
                              </div>

                              <div class="form-group">

                                <div class="modal-footer">
                                   <center> <button class="btn btn-danger btn-lg btn-block" type="submit" >Sign In</button></center>
                                </div>
                                  <center> <a href= "/" ><h4>Back to Home</h4></a ></center>
                
                        </form>

                 </div>

             <div style="background-color:#" class="modal-footer">
                  <div class="col-md-5">
                  <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>-->
              </div>  
              </div>
      </div>
      </div>
    </div>
    </div></center>





    </body>
</html>
