<html>

			
		
<form action="{{ url('/postedFindAHome') }}" method="post">
 <p><label>subject:</label></p>
 <p><input type="text" name="subject"  /></p>

 <p><label>content:</label></p>
 <p><input type="text" name="content"  /></p>

  <p><label>petName:</label></p>
 <p><input type="text" name="petName"  /></p>

  <p><label>petImage:</label></p>
 <p><input type="file" name="petImage"  /></p>

  <p><label>location:</label></p>
 <p><input type="text" name="location"  /></p>

  <p><label>contact:</label></p>
 <p><input type="text" name="contact"  /></p>

  <p><label>status:</label></p>
 <p><input type="text" name="status"  /></p>

  <p><label>helper:</label></p>
 <p><input type="text" name="helper"  /></p>

  <p><label>postType:</label></p>
 <p><input type="text" name="postType"  value="findAHomePost"/></p>

 <p><input type="submit" value="FindAHomePost" /></p>
 </form>
</html>