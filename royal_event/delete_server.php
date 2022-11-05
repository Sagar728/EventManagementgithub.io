<?php
$connection = mysqli_connect('localhost', 'root');

if($connection)
{
    echo "Connection is Establish !!";
}
else
{
    echo "Connection Failed !!";
}


mysqli_select_db($connection , 'royal_event');

$ID = $_POST['ID'];



$data = "DELETE FROM tblbooking  WHERE ID = '$ID'";

mysqli_query($connection , $data);
header('location:fetch_data.php');


?>