<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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




<div class="container">
  <form action="update_server.php" method="post">
    <label for="fname">ID</label>
    <input type="text" id="fname" name="ID" placeholder="Enter ID">

    <label for="lname"> Name</label>
    <input type="text" id="lname" name="Name" placeholder="Your Name..">

    <label for="lname"> Email</label>
    <input type="text" id="lname" name="Email" placeholder="Your Email..">

    <label for="lname"> Mobile Number</label>
    <input type="text" id="lname" name="MobileNumber" placeholder="Your Number..">

    <label for="country">Event</label>
    <select id="country" name="EventType">
      <option value="australia">Party</option>
      <option value="canada">Birthday</option>
      <option value="australia">Wedding</option>
      <option value="canada">Fare Well</option>
      <option value="australia">DJ Night</option>
      <option value="canada">Annuversury</option>
    
      
    </select>

    <label for="subject">Address</label>
    <textarea id="subject" name="VenueAddress" placeholder="Write Address" style="height:50px"></textarea>


    <label for="country">Status</label>
    <select id="country" name="Status">
      <option value="australia">Approved</option>
      <option value="canada">Cancell</option>
      
    </select>

    
    <button  type="submit" class="btn" onclick="popUp()"> Update </button>
      <script>
            function popUp()
{
  alert("Update Sucessfull");
}
        </script>
  </form>
</div>

</body>
</html>
