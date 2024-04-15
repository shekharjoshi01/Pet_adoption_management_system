<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="lottieone">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://lottie.host/63c8b7c7-e57b-40bd-b387-15765039a274/jm3qobcSdK.json"
        background="##ffffff"
        speed="1"
        style="width: 300px; height: 300px;"
        loop
        autoplay
        direction="1"
        mode="normal"
      ></lottie-player>
    </div>
    <div class="lottietwo">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://lottie.host/6af17737-3873-4c1c-b943-a199f2c7f434/GhtSybgrjF.json"
        background="##fff"
        speed="1"
        style="width: 345px; height: 345px;"
        loop
        autoplay
        direction="1"
        mode="normal"
      ></lottie-player>
    </div>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="uname" required />
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pw" required />
          <label>Password</label>
        </div>
        <!-- <div class="pass"><a href="forget.php"> Forgot Password?</a></div> -->
        <input type="submit" value="Login" name="login"/>
        <div class="signup_link"><a href="../admin/admin.php">Admin?</a></div>
      </form>
      <?php include("../../contactdetails/connection.php"); ?>
    </div>
  </body>
</html>

<?php
if($_POST['login'])
{
  $fname = $_POST['uname'];
  $pass = $_POST['pw'];

  $query = "INSERT INTO login (Username,Password) VALUES ('$fname','$pass')";
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "Data inserted successfully";
  }else{
    echo "Data is not inserted!!!!!";
  }
}
?>
