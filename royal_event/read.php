<?php
@include 'server.php';
header("Content-Type:application/json");
if ((isset($_GET['Name']) && $_GET['Name']!=""))
{
$na=$_GET['Name'];
$select_products = $conn->prepare("SELECT * FROM tblbooking where name like '%'".($na)."'%'");
      $select_products->execute();
      if($select_products->rowCount() > 0){
        while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
        $ID=$fetch_products['ID'];
        $Name=$fetch_products['Name'];
        $Email=$fetch_products['Email'];
        $MobileNumber=$fetch_products['MobileNumber'];
        $VenueAddress=$fetch_products['VenueAddress'];
        $EventType=$fetch_products['EventType'];
        $Status=$fetch_products['Status'];
        response($ID,$Name,$Email,$MobileNumber,$VenueAddress,$EventType,$Status);
    }
    }
    else{
        echo "No records found!";
    }
}
    function    response($ID,$Name,$Email,$MobileNumber,$VenueAddress,$EventType,$Status)
    {
        $response['ID']=$ID;
        $response['Name']=$Name;
        $response['Email']=$Email;
        $response['MobileNumber']=$MobileNumber;
      
        $response['VenueAddress']=$VenueAddress;
        $response['EventType']=$EventType;
        $response['Status']=$Status;
        $json_response = json_encode($response);
        echo $json_response;
    }
?>









