<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Login Form</title>
  </head>
  <body>
    <div class="login-container" id="loginForm">
      <h2>Login</h2>
      <form action="formhandler.php" method="POST">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">Login</button>
        <a href="Signup.php"
          ><button type="button" class="signup-btn">Sign up Form</button></a
        >
      </form>
      <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
  </body>
</html>
