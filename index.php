<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WebChat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="main">
      <div id="info">
        <h2>LOGIN Now!</h2>
        <form action="login.php" method="post">
        <label> <b>Username</b></label>
        <input type="text" name="uname" placeholder="Username"><br><br>
        <label> <b>Password</b> </label>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <button style="background-color: #51b59a; color: white;" type="submit" name="button"> <b>Login</b> </button>
        </form>

        <form action="signup.php" method="post">
          <h2>Haven't created an account yet? Sign in now!</h2>
          <label> <b>Username</b></label>
          <input type="text" name="uname" placeholder="Username">
          <br>
          <br>
          <label> <b>Email Id</b></label>
          <input type="email" name="Email" placeholder="Email">
          <br>
          <br>
          <label><b>Password</b> </label>
          <input type="password" name="Password" placeholder="Password">
          <br>
          <br>
          <button style="background-color: #51b59a; color: white;" type="submit" name="button"> <b>Sign In</b> </button>
        </form>

      </div>
    </div>
  </body>
</html>
