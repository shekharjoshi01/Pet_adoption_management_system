<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
  <div class="lottiethree">
      <script
        src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"
      ></script>
      <dotlottie-player
        src="https://lottie.host/8cf95f2a-8af0-4589-a813-10289ff7b148/UOVwBPNAoF.json"
        background="transparent"
        speed="1"
        style="width: 400px; height: 400px;"
        direction="1"
        playMode="normal"
        loop
        autoplay
      ></dotlottie-player>
    </div>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="POST">
        <div class="txt_field">
          <input type="text" name="uname" required />
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pw" required />
          <label>Password</label>
        </div>
        <input type="submit" value="Login" name="login"/>
      </form>
    </div>
  </body>
</html>

<?php
$name = 'shekhar';
$pass = 'root';
if (isset($_POST['login'])) {
  $username = $_POST["uname"];
  $userpass = $_POST["pw"];
  if ($username == $name && $userpass == $pass) {
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost:90/display.php" />
    <?php
  }
  else{
    echo 'Username or Password not matched';
  }
}
?>


