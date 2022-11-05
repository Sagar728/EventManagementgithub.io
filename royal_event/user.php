<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=date]
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;

}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: brown;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}








</style>

</head>
<body>



<div class="row">
  <div class="col-75">
    <div class="container">
    
    
    <form action="connect.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="Fullname" placeholder="Enter Your Full Name"  required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="Email" placeholder="Enter Your Email" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="Address" placeholder="Enter Your Address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="City" placeholder="Enter City" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="State" placeholder="State" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="Zip" placeholder="Zip" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
          
            <input type="text" id="expmonth" name="Event" placeholder="Enter Event" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Event Date</label>
                <input type="date" id="expyear" name="Date" placeholder="DD/MM/YYY" required>
              </div>
              <div class="col-50">
                <label for="cvv">Price</label>
                <input type="text" id="cvv" name="Price" placeholder="Event Price" required>
              </div>

              <div>
    
              <label  style="margin-left:20px;" for="text"> More Details</label>
              <textarea style="margin-left:20px;" name="Text" id="text" cols="90" rows="13"></textarea>

              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Your address is same as event address
        </label>  
        
        
        <button class="btn" type="submit" > Register </button>
           
       
     
            
       
      </form>

    </div>
  </div>
  
</div>





</body>


</html>

