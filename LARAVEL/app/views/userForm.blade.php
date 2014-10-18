<html>
 <head>
 <title>Create User</title>
 </head>
 <body>
 <form action="{{ url('/registered') }}" method="post">

 <p><label for="username">Username:</label></p>
 <p><input type="text" name="userName" /></p>

 <p><label for="password">Password:</label></p>
 <p><input type="password" name="password" /></p>

 <p><label for="realName">Name Surname:</label></p>
 <p><input type="text" name="realNameSurName" /></p>

 <p><label for="Age">Age:</label></p>
 <p><input type="text" name="age"  /></p>


 <p><label for="Address">Address:</label></p>
 <p><input type="text" name="address"  /></p>

 <p><label for="email">Email:</label></p>
 <p><input type="text" name="email"  /></p>

  <p><label for="petName">petName:</label></p>
 <p><input type="text" name="petName"  /></p>

 <p><label for="petImage">petImage:</label></p>
 <p><input type="text" name="petImage"  /></p>

 <p><input type="submit" value="Create" /></p>
 </form>
 </body>
 </html>