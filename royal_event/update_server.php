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
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$MobileNumber = $_POST['MobileNumber'];
$EventType = $_POST['EventType'];
$VenueAddress = $_POST['VenueAddress'];
$Status = $_POST['Status'];





$data = "UPDATE tblbooking
SET Name = '$Name', Email= '$Email', MobileNumber = '$MobileNumber', EventType= '$EventType', VenueAddress = '$VenueAddress', Status= '$Status'
WHERE ID = '$ID';";

mysqli_query($connection , $data);
header('location:update4728.php');


?>