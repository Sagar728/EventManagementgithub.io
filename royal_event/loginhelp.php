<?php

$connection = mysqli_connect('localhost', 'root');
mysqli_select_db($connection , 'authentication');

$Username =$_POST['Username'];
$Passward =$_POST['Pass'];


$data =  "SELECT Username FROM user1 WHERE Username = '$Username'";
$data2 = "SELECT Password FROM user1 WHERE Password = '$Passward'";
$result1 = $connection -> query($data);
$result2 = $connection -> query($data2);

if($result1 -> num_rows >0 &&  $result2 -> num_rows >0) 
{
    header('location:user.php');


    
}

else
{
    header('location:signup.php');
    
}


$connection -> close();


?>


