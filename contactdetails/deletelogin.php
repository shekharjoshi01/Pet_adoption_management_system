<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM login WHERE id='$id'";
$data = mysqli_query($conn,$query);
if($data)
{
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost:90/display.php" />
<?php
}
else
{
    echo 'Data Not Deleted';
}
?>