<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM contact_us WHERE ID='$id'";
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