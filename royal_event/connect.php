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

mysqli_select_db($connection ,'royal_event');

$Fullname = $_Post['Fullname'];
$Email = $_Post['Email'];
$Username = $_Post['Username'];
$Password = $_Post['Password'];
$Address = $_Post['Address'];
$City = $_Post['City'];
$State = $_Post['State'];
$Zip = $_Post['Zip'];
$Event = $_Post['Event'];
$Date = $_Post['Date'];
$Price = $_Post['Price'];

$data = "INSERT INTO client (Fullname,Email,Username,Password,Address,City,State,Zip,Event,Date,Price) VALUES ('$Fullname','$Email','$Username','$Password','$Address','$City','$State','$Zip','$Event','$Date','$Price')";

mysqli_query($connection , $data);
header('location:interface.php');


?>



