<?php
@include 'server.php';
header("Content-Type:application/json");
$apidata=json_decode(file_get_contents('php://input'),true);
$insert_products = $conn->prepare("INSERT INTO `tblbooking`(Name, ID, Email, MobileNumber) VALUES(?,?,?,?)");
$insert_products->execute([$apidata["Name"], $apidata["ID"], $apidata["Email"], $apidata["MobileNumber"]]);
echo "Succesful Insertion Through POST!!";
return $apidata;
?>









