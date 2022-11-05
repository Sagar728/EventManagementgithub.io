<?php

@include 'server.php';





if(isset($_POST['add_product'])){
   $Name = $_POST['Name'];
   $Name = filter_var($Name, FILTER_SANITIZE_STRING);
   $ID = $_POST['ID'];
   $ID = filter_var($ID, FILTER_SANITIZE_STRING);
   $Email = $_POST['Email'];
   $Email = filter_var($Email, FILTER_SANITIZE_STRING);
   $MobileNumber = $_POST['MobileNumber'];
   $MobileNumber = filter_var($MobileNumber, FILTER_SANITIZE_STRING);

   

   $select_products = $conn->prepare("SELECT * FROM `tblbooking` WHERE Name = ?");
   $select_products->execute([$Name]);

   if($select_products->rowCount() > 0){
      $message[] = 'Customer is already exist!';
   }else{
$apidata=array("Name"=>$Name,"ID"=>$ID,"Email"=>$Email,"MobileNumber"=>$MobileNumber);
if($apidata)
{      
$encoded_data=json_encode($apidata);
//Calling the create API for insertion through HTTP post method
$url="http://localhost/Royal%20Event/Royal%20Event/royal_event/create.php/";
$curl=curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json"));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS,$encoded_data);
$result=curl_exec($curl);
      
   }
   }

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $url1="http://localhost/gs/api/delete.php?id=".$delete_id;
   $client=curl_init($url1);
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response1 = curl_exec($client);
   $result1 = json_decode($response1);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   header('location:admin_products.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWoAAAVp8APVWfAKRVngDgVZ4A+FWeAPJWnwDMVqAAcVehAAZXogBnWKQAq1mmAJkAAAAAAAAAAAAAAABXoQAEVqAAllafAP5VnwD/VZ4A/1WeAP9VngD/Vp8A/1agAP9XoQCbV6IAq1ikAP9ZpgDkAAAAAAAAAAAAAAAAV6EAkFagAP9WnwD/VZ4A/1WeALpVngBiVZ4AUlafAIFWoADrV6EA+VeiANhYpAD/WaYA5AAAAAAAAAAAV6IAM1ehAP1WoAD/Vp8A/1WeAIJVngABAAAAAAAAAAAAAAAAVqAAIFehAOZYowD/WKQA/1mmAOQAAAAAAAAAAFeiAJ9WoQD/VqAA/1afAM1VngACAAAAAAAAAAAAAAAAAAAAAAAAAABXoQBmWKMA/1mkAP9apgDkAAAAAFijAAFXogDlVqEA/1agAP9WnwBrAAAAAAAAAAAAAAAAVZ8AE1afAD9WoAA/V6EAVlijAP9ZpQD/WqYA5AAAAABYowAUV6IA/lehAP9WoAD/Vp8AMgAAAAAAAAAAAAAAAFafAExWoAD/VqAA/1eiAP9YowD/WaUA/1qnAOQAAAAAWKMAJVeiAP9XoQD/VqAA/1afABgAAAAAAAAAAAAAAABWnwBMVqAA/1ehAP9XogD/WKMA/1mlAP9apwDkAAAAAFijACNXogD/V6EA/1agAP9WoAAXAAAAAAAAAAAAAAAAVp8AC1agACdXoQAnV6IAJ1ikACdZpQAnWqcAIgAAAABYpAANWKIA+1ehAP9XoQD/VqAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAVqQAAFijANNXogD/V6EA/1agAGsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABYowALWaQAh1mmAIdaqACFW6oABQAAAABYpAB+WKMA/1eiAP9XoQDRVqEABAAAAAAAAAAAAAAAAAAAAAAAAAAAWKMAUFmlAP9apgD/W6gA4lyqAAEAAAAAWKQAElijAOtXogD/V6IA/1ehAI5XoQACAAAAAAAAAAAAAAAAWKMAD1ikANNZpQD/WqcA/1upAJEAAAAAAAAAAAAAAABYpABMWKMA+1eiAP9XogD/V6IAw1eiAGdXogBQWKIAdFijANxZpAD/WaYA/1qnAOtbqQAZAAAAAAAAAAAAAAAAAAAAAFikAEtYowDqWKMA/1eiAP9XogD/WKMA/1ijAP9YpAD/WaUA/1qmAONaqAA1AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWKQAEVijAHZYowDFWKMA71ijAPtYpADtWaQAwlmlAHRapwAOAAAAAAAAAAAAAAAA4AEAAMABAADAAQAAgcEAAIPhAAAHAQAABwEAAAcBAAAHAQAAB/8AAAfgAACD4AAAgcEAAMABAADgAwAA8AcAAA==" rel="icon" type="image/x-icon">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="add-products">

   <h1 class="title">add new product</h1>

   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
         <input type="text" name="name" class="box" required placeholder="enter product name">
         <select name="category" class="box" required>
            <option value="" selected disabled>select category</option>
               <option value="vegetables">Vegetables</option>
               <option value="fruits">Fruits</option>
               <option value="meat">Meat</option>
               <option value="fish">Fish</option>
         </select>
         </div>
         <div class="inputBox">
         <input type="number" min="0" name="price" class="box" required placeholder="enter product price">
         <input type="file" name="image" required class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
      </div>
      <textarea name="details" class="box" required placeholder="enter product details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" value="add product" name="add_product">
   </form>

</section>

<section class="show-products">

   <h1 class="title">products added</h1>

   <div class="box-container">

   <?php
      $show_products = $conn->prepare("SELECT * FROM `tblbooking`");
      $show_products->execute();
      if($show_products->rowCount() > 0){
         while($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <div class="price">Rs.<?= $fetch_products['price']; ?>/-</div>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="cat"><?= $fetch_products['category']; ?></div>
      <div class="details"><?= $fetch_products['details']; ?></div>
      <div class="flex-btn">
         <a href="admin_update_product.php?update=<?= $fetch_products['id']; ?>" class="option-btn">update</a>
         <a href="admin_products.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">now products added yet!</p>';
   }
   ?>

   </div>

</section>
<script src="js/script.js"></script>

</body>
</html>