	<?php

	if(Auth::check()) {echo '
		<div class="col-xs-12 col-md-12">
			<div class="container">

				<div class="dropdown pull-right"><br>
	     		 	 <a href="/logout" class="btn btn-default" type="button">Log out</a><br><br>
	         	</div>

          
			 	<div class="dropdown pull-right"><br>
		     
					<a href=  "/member/'.Auth::user()->id.'"' ; echo'

					 class="btn btn-default" type="button"  ><h4>'.Auth::user()->userName.'</h4><hr>
				     	
				     	<img 	class="media-object img-circle"  type="button" src="/storage/pic/picMember/'.Auth::user()->profilePic.'"' ;
				     		 echo '	style = "width:100px; height:100px;"  ><br>View Profile</a> 
				     </a> 

		         </div>
		    </div>
	    </div> 
';}
else echo '  <div class="dropdown pull-right"><br>
          <a href="/register" class="btn btn-warning" type="button">Register</a>
  				
  			<a href="/login" class="btn btn-danger" type="button">Log in</a>
  		
  			<a href="/forgotPassword" class="btn btn-success" type="button">Forgot password?</a>
		 <hr></div>'
		 ;
	?>