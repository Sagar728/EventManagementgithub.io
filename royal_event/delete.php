<?php
@include 'server.php';
header("Content-Type:application/json");
if ((isset($_GET['ID'])))
{
    $delete_id=$_GET['ID'];
  
   $delete_products = $conn->prepare("DELETE FROM `tblbooking` WHERE ID = ?");
   $delete_products->execute([$delete_id]);
 
   echo "Horray! Deletion Succesful";
   return true;
}
?>







