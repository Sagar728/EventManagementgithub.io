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


mysqli_select_db($connection , 'authentication');

$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$email =$_POST['Email'];
$address =$_POST['Address'];
$city =$_POST['City'];
$state =$_POST['State'];
$aaddhar =$_POST['Aadhar'];
$date =$_POST['Date'];
$contact =$_POST['Contact'];
$gender =$_POST['x'];
$username =$_POST['Username'];
$passward =$_POST['Pass'];


$data = "INSERT INTO user1 (Username , Password , First_name , Last_name , Aadhar_no ,Mobile_no , Email , Street_address , City , State , DOB , Gender) VALUES ('$username','$passward', '$fname','$lname','$aaddhar' , '$contact', '$email','$address','$city','$state','$date','$gender')";

mysqli_query($connection , $data);
header('location:interface.php');


?>