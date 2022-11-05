
<?php

@include 'server.php';

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `tblbooking` WHERE Name = ? AND ID = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>

body{
   background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTszmf0u7aoI9aASf1PD-TvTBFb_hq301Sgjw&usqp=CAU");
   background-repeat:no-repeat;
   background-size:cover;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}


table
{
  position : absolute;
  top:260px; 
  left:350px;
  text-align:centre;
  

  
}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  text-align:centre;
  
 
}
#customers {

}
td {
  text-align: center;
}

.sumo
{
   position:absolute;
   top:150px;
   left:420px;
   height:30px;
   width:400px;
   border:3px solid black;
   border-radius:3px;

}

.sumo1
{
   position:absolute;
   top:155px;
   left:870px;
   height:30px;
   width:170px;
   border:3px solid black;
   border-radius:3px;
  

}


.delete button
{
   position:absolute;
   top:105px;
   left:220px;
   height:25px;
   border:3px solid black;
   border-radius:3px;
   
}
#deletebox
{
   position:absolute;
   top:100px;
   left:15px;
   border:3px solid black;
   border-radius:3px;
   height:25px;
   width:170px;
   
}



</style>


</head>

<body>
   

  
<ul>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="manage_event.php">Manage Event</a></li>
  <li><a href="manage_service.php">Manage Service</a></li>
  <li><a  href="new_bookings.php">Booking Management</a></li>
  <li><a href="event_report.php">Report</a></li>
  <li><a href="fetch_data.php">Operation</a></li>
  <li><a href="update4728.php">Update</a></li>

</ul>


<section class="search-form">

   <form action="" method="POST">
      <input type="text"  class="sumo" name="na" placeholder="search Customer By Name....">
      <input type="submit" class="sumo1" name="submit" value="search" class="btn">

     
   </form>


<form  action="delete_server.php" method="post">

<div class="delete">

<input type="text" name="ID" id="deletebox"  placeholder="Enter ID">
<button  type="submit"  id="deletebutton "onclick="popUp()"> Delete </button>
      <script>
            function popUp()
{
  alert("Deletion Sucessfull");
}
        </script>
</div>
</form>








</section>

<?php



?>

<section class="products" style="padding-top: 0; min-height:100vh;">

   <div class="box-container">

   <?php
      if(isset($_POST['na']) && $_POST['na']!=""){
      $na = $_POST['na'];
      $url="http://localhost/Royal%20Event/Royal%20Event/royal_event/read.php?Name=\"".$na."\"";
      //$search_box = filter_var($search_box, FILTER_SANITIZE_STRING);
      //$select_products = $conn->prepare("SELECT * FROM `products` WHERE name LIKE '%{$search_box}%' OR category LIKE '%{$search_box}%'");
      //$select_products->execute();
      $client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
   $result = json_decode($response);
   if($result!=NULL){
   ?>
   <form action="" class="box" method="POST">
<center>
   <table id="customers">
      <thead style="text-align:centre;">
      <center>   <th >ID</th> </center>
         <center><th >Name</th>  </center>
         <center><th >Number</th></center>
         <center><th >Email</th></center>
         <center><th >Address</th></center>
         <center><th >Event</th></center>
         <center><th >Status</th></center>

       
</thead>
      <tbody>
      <td><?= $result->ID; ?></td>
      <td><?=$result->Name; ?></td>
      <td><?=$result->MobileNumber; ?></td>
      <td><?=$result->Email; ?></td>
      <td><?=$result->VenueAddress; ?></td>
      <td><?=$result->EventType; ?></td>
      <td><?=$result->Status; ?></td>
      </tbody>
   </table>
         
      
      </center>

   
   </form>
   <?php
   }
   else{
      
      echo '<p class="empty">no result found!</p>';
   }  
      
   };
   ?>

   </div>

</section>







</body>
</html>







