<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="user.php" method="POST">
      
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
            <label for="cname">Username</label>
            <input type="text" id="cname" name="Username" placeholder="Enter Username" required>
            <label for="ccnum">Password</label>
            <input type="password" id="ccnum" name="Password" placeholder="Enter Password" required>
            <label for="expmonth">Event</label>
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
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Your address is same as event address
        </label>  
        
        
        <button class="btn" type="submit" onclick="popUp()"> Register </button>
            <script>
                  function popUp()
    {
        alert("Registration Sucessfully");
    }
              </script>

       
     
            
       
      </form>





</body>
</html>