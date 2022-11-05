<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
      *{
        margin:0px;
        padding:0px;
      }
      body
      {
        background:url("data:image/jpeg;base64,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");
        background-repeat:no-repeat;
        background-size:cover;
       
        

      }
      #admin{
        position: absolute;
        top: 450px;
        left:500px;

     }  
     #user 
     {
      position: absolute;
        top: 450px;
        left:860px;
     }

     button
     {
      border:2px solid black;
      height:50px;
      width:170px;
      font-size:1.4rem;
      background-color:#eb2f38;
      
      border-radius: 20px;

  

     }

     button:hover
     {
      border:2px solid black;
      height:55px;
      width:175px;
      font-size:1.5rem;
      border-radius: 40px;

      background-color:#f250b4;
     
      cursor:pointer;
     }

     
     .icon
    {
      font-size:10rem;
    }
    #icon1:hover
    {
      font-size:10.5rem;
      cursor: pointer;
    }

    #icon2:hover
    {
      font-size:10.5rem;
      cursor: pointer;
    }
    #icon1

    {
      position: absolute;
        top: 240px;
        left:480px;

    }

    #icon2
    {
      position: absolute;
        top: 240px;
        left:880px;
    }

    #Event
    {
      position: absolute;
      top:50px;
      left:330px;
      color:black;
      font-size: 2.5em ;
      border: 2px solid black;
      background-color:#f7a8df;
      height:50px;
      width:800px;
      border-radius:10px;
    
    }

    #Event:hover
    {
      position: absolute;
      top:50px;
      left:330px;
      color:black;
      font-size: 2.65em ;
      border: 2px solid black;
      background-color:#f29bd7;
      height:55px;
      width:805px;
      border-radius:15px;
    
    }

img

{
  height:800px;
  width:1535px;
}

.nav-link
{
  position: absolute;
  top: 50px;;
  right:50px;
  height:30px;
  width:150px;
  padding:10px;
  font-size:1.5em;
  border-radius:15px;

 

}

.nav-link:hover
{ cursor: pointer;
  position: absolute;
  top: 50px;;
  right:50px;
  height:35px;
  width:155px;
  padding:12px;
  font-size:1.55em;
  border-radius:18px;
  

 

}










.form4728 {
  background-color: #ffffff;
  width: 500px;
  margin: 50px auto 10px auto;
  padding: 30px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 10px -3px #333;
  text-align: center;
  transition:2s;
  position: absolute;
  top:-80%;
  left:33%;
  transition:1.5s;
  shadow : 0 0 3px 3px black;
 
}

#input4728 {
  border-radius: 100px;
  padding: 10px 15px;
  width: 50%;
  border: 1px solid #D9D9D9;
  outline: none;
  display: block;
  margin: 20px auto 20px auto;
}

#button4728 {
  border-radius: 100px;
  border: none;
  background: #719BE6;
  width: 50%;
  padding: 10px;
  color: #FFFFFF;
  margin-top: 25px;
  box-shadow: 0 2px 10px -3px #719BE6;
  display: block;
  margin: 55px auto 10px auto;
}

#a4728{
  text-align: center;
  margin-top: 30px;
  color: #719BE6;
  text-decoration: none;
  padding: 5px;
  display: inline-block;
}

#a4728:hover {
  text-decoration: underline;
}



.showloginform
{
  top:120px;
}






    </style>
</head>    
<body>
 
     <div id="Event">
     <center> We Manage Your Event</center>
     </div>
     
     


    <button id="admin" onclick="showModel()">  For User </button>  
    <button id="user"> <a href="index.php"  style = " text-decoration:none; color:black;" title="For Admin">For Admin</a></button>  
   
   <div class="icon">
    <i id="icon1" class="fa-sharp fa-solid fa-users"></i>
    <i id="icon2"class="fa-solid fa-user"></i>
    </div>
 
<img src="https://freepngimg.com/thumb/wave/110358-pink-wave-free-transparent-image-hd.png" alt="">


<div class="btn1">
 


<a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=917755954728&text=Hi%20Sagar,%20I%20am%20intrested%20to%20your%20company%20%20for%20Event%20Management
          "   style = " text-decoration:none;  color : white; border:2px solid gray; background-color:#cc2162; " title="Contact Admin">
               
              <center>  <span class="menu-title" >For Query</span> </center>
            </a>
   
</div>



<form action ="loginhelp.php" method = "POST">


<div class="form4728">
  
  
                             
<input  id="input4728" type="text" name="Username" placeholder="Username" />
   
  <input   id="input4728" type="password" name="Pass" placeholder="Password" />

  <button  id="button4728" >Sign in</button>
   

   <a   id="a4728"href="signup.php">Create account</a>
  <br>
</div>

</form>


<script>
function showModel()

{

  document.querySelector('.form4728').classList.add('showloginform');
}

</script>


</body>
</html>



<?php @include("includes/index.php");?>
<?php @include("includes/user.php");?>