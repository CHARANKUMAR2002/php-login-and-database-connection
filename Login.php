<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="Login.js"></script>
    <title>Login</title>
</head>
<body background="back.jpg" >
    <div style="margin-left: 35%; margin-top: 10%;">
    <div class="card text-info" style="max-width: 500px; background-color: rgba(0, 0, 0, 0.541);" id="card">
        <div class="card-body">
          <h1 style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;"><i class="fa fa-user"></i>  Login</h1>
          <form method="post" action="validation.php">
          <div class="user">
            <i class="fa fa-user" style="padding-top: 10px; font-size: 18px;"></i>
            <input type="text" id="mail" placeholder="Username" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" name="uname">
        </div>
        <div class="pass">
            <i class="fa fa-key" style="padding-top: 10px; font-size: 18px;"></i>
          <input type="password" id="pass" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" name="password" >
        </div>
        <br>
        <div style="margin-left: 32%;">
          <label class="btn btn-success">
            <input type='checkbox'  autocomplete='off' name='remember' value='1'> Remember Me</label>
        </div>
        <button class="btn btn-primary" style="margin-left: 31%; border-radius: 30px; margin-top: 30px; width: 150px;" id="login" name="login" type="submit">Login</button>
        <div>
                <?php
                  if(isset($_GET['error'])) { ?>
                    <p class='error'><?php echo $_GET['error']; ?></p>
                  <?php } ?>
            </div>
        </form>
      </div>
    </div>
</body>
</html>