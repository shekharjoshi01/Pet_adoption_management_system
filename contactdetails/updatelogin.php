<?php
include("connection.php");

$id = $_GET['id'];

$query = "SELECT * FROM login WHERE ID='$id'";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../login/logindetails/style.css" />
  </head>
  <body>
    </div>
    <div class="center">
      <h1>Update Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="uname" value="<?php echo $result['Username'] ?>" required />
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="pw" value="<?php echo $result['Password'] ?>" required />
          <label>Password</label>
        </div>
        <!-- <div class="pass"><a href="forget.php"> Forgot Password?</a></div> -->
        <input type="submit" value="Update" name="update"/>
      </form>
      <?php include("connection.php"); ?>
    </div>
  </body>
</html>

<?php
if($_POST['update'])
{
  $uname = $_POST['uname'];
  $pass = $_POST['pw'];

  $query = "UPDATE login SET Username='$uname', Password='$pass' WHERE ID='$id'";
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "<script>alert('Record Updated')</script>";
    ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost:90/display.php" />
    <?php
  }else{
    echo "Record Not Updated";
  }
}
