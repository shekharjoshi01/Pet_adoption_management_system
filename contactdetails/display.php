<html>
    <head>
        <title>My Blog</title>
        <style>
            body{
                background-color: skyblue;
            }
            table{
                background-color: white;
            }
            .update{
                background-color: green;
                color: white;
                border-radius: 5px;
                width: 95px;
                font-weight:  bold;
                border: 0;
                outline: none;
                height: 23px;
                cursor: pointer;
            }

        .delete{
            background-color: red;
            color: white;
            border-radius: 5px;
            width: 95px;
            font-weight:  bold;
            border: 0;
            outline: none;
            height: 23px;
            cursor: pointer;
        }
        </style>
    </head>

<?php
include('connection.php');

$query = "SELECT * FROM contact_us";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



if($total != 0)
{
    ?>
    <h2 align="center">Displaying Contact Us Records</h2>
    <center>
    <table border="2" cellspacing="7" width="94%">
        <tr>
            <th width="3%">ID</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="20%">Email</th>
            <th width="10%">Pet Name</th>
            <th width="30%">Message</th>
            <th width="15%">Operations</th>
        </tr>
    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['ID']."</td>
                <td>".$result['FirstName']."</td>
                <td>".$result['LastName']."</td>
                <td>".$result['Email']."</td>
                <td>".$result['PetName']."</td>
                <td>".$result['Message']."</td>
                <td><a href='update.php?id=$result[ID]'><input type='submit' value='Update' class='update'></a>
                <a href='delete.php?id=$result[ID]'><input type='submit' value='Delete' class='Delete'></a></td>
            </tr>";
    }
}
else
{
    echo"Table dont have any records";
}
?>
</table>

<?php
include('connection.php');

$query = "SELECT * FROM login";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



if($total != 0)
{
    ?>
    <h2 align="center">Displaying Login Records</h2>
    <center>
    <table border="2" cellspacing="7" width="39%">
        <tr>
            <th width="4%">ID</th>
            <th width="10%">User Name</th>
            <th width="10%">Password</th>
            <th width="15%">Operations</th>
        </tr>
    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['Username']."</td>
                <td>".$result['Password']."</td>

                <td><a href='updatelogin.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
                <a href='deletelogin.php?id=$result[id]'><input type='submit' value='Delete' class='Delete'></a></td>
            </tr>";
    }
}
else
{
    echo"Table dont have any records";
}
?>
</table>
