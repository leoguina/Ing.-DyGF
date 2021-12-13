<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="login/css/master.css">
  </head>
  <body>

    <div class="login-box">
      <img src="login/img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form method="" id="login">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" placeholder="Ingresa un usuario" id="usuario" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" placeholder="Ingresa una contraseña" id="password" name="password">
        <input type="submit" value="Log In">
        <a href="#">Lost your Password?</a><br>
        <a href="#">Don't have An account?</a>
      </form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
