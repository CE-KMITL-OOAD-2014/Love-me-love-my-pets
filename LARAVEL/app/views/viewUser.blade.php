<html>

			
			{{$member->getUserName()}} is {{$member->getAge()}} years old; 
<form action="{{ url('/logout') }}" method="post">

 <p><input type="submit" value="logout" /></p>
 </form>
</html>