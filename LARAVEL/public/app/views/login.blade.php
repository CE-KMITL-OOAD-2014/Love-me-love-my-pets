
<html>
 <head>
 <title>LOG IN</title>
 </head>
 <body>
 
 <form action="{{ url('/logined') }}" method="post">
<p><label for="userName">Username:</label></p>
 <p><input type="text" name="userName" /></p>

 <p><label for="password">Password:</label></p>
 <p><input type="password" name="password" /></p>
  <p><input type="submit" value="Login" /></p>
  </form>
 </body>
 </html>