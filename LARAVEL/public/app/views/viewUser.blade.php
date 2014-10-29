<html>

			
			{{$member->getUserName()}} is {{$member->getAge()}} years old; 
			<img src={{"storage/pic/".$member->getPetImage()}} >
	<!--	{{ HTML::image('storage/pic/'.'$member->getPetImage()', 'a picture', array('class' => 'thumb')) }}-->
<form action="{{ url('/logout') }}" method="post">

 <p><input type="submit" value="logout" /></p>
 </form>
</html>