<?php
include("connection.php");

$id = $_GET['id'];

$query = "SELECT * FROM contact_us WHERE ID='$id'";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data)
?>
<html>
    <head>
        <title>Update</title>
    </head>
    <link rel="stylesheet" href="update.css">
    <body>
    <div class="container">
      <div class="text">
        Update the Database
      </div>
      <form action="#" method="POST">
        <div class="form-row">
          <div class="input-data">
            <input type="text" value="<?php echo $result['FirstName'] ?>" name="fname" required />
            <div class="underline"></div>
            <label for="">First Name</label>
          </div>
          <div class="input-data">
            <input type="text" value="<?php echo $result['LastName'] ?>" name="lname" required />
            <div class="underline"></div>
            <label for="">Last Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" value="<?php echo $result['Email'] ?>" name="mail" required />
            <div class="underline"></div>
            <label for="">Email Address</label>
          </div>
          <div class="input-data">
            <input type="text" value="<?php echo $result['PetName'] ?>" name="pname" required />
            <div class="underline"></div>
            <label for="">Pet Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data textarea">
            <textarea  rows="8" cols="80" name="message" required><?php echo $result['Message'] ?></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Write your message</label>
            <br />
            <div class="form-row submit-btn">
              <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="Update" name="update" />
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php include("connection.php"); ?>
    </div>
    </body>
</html>
<?php
if($_POST['update'])
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['mail'];
  $petname = $_POST['pname'];
  $message = $_POST['message'];

  $query = "UPDATE contact_us SET FirstName='$fname', LastName='$lname', Email='$email', PetName='$petname', Message='$message' WHERE ID='$id'";
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