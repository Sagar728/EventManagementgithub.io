<?php
@include 'server.php';
header("Content-Type:application/json");
$apidata=json_decode(file_get_contents('php://input'),true);
$update_product = $conn->prepare("UPDATE `tblbooking` SET Name = ?, ID = ?, Email = ?, VenueAddress = ? WHERE ID = ?");
   $update_product->execute([$apidata["Name"], $apidata["ID"], $apidata["Email"], $apidata["VenueAddress"], $apidata["ID"]]);
   
  
   echo "Suceesful update through PUT!!";
   return $apidata;
?>




