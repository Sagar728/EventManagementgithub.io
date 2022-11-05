

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Monoton&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url('data:image/jpeg;base64,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');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .box {



            height: 98vh;
            width: 60vh;
            position: absolute;
            top: 1em;
            left: 34em;
            border: 3px solid white;
            box-shadow: -7px -7px 10px rgb(99, 89, 89);

            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(49, 48, 45, 0.432);

        }

        #sa {
            color: white;

        }

        #sa:hover {

            color: grey;
            cursor: pointer;
        }

        .i {
            width: 20vw;
            margin: 0.85em 0em 0em 0em;
            height: 5vh;


            background-color: white;
            color: black;
            font-family: cursive;
            font-style: italic;
            font-size: 1.19em;
            text-decoration: underline;
            border: 3px solid rgb(52, 121, 57);
            border-bottom-color: blue;
            border:none;

        }

        #r {
            width: 10vw;
            margin: 0.4em 0em 0em 0em;
            height: 5vh;

            background-color: gray;
            color: white;
            font-family: cursive;
            font-style: italic;
            font-size: 1.5em;
            text-decoration: underline;
        }

        #l {
            width: 30vw;
            margin: 0.4em 0em 0em 0em;
            height: 6vh;


            background-color:#01060d;
            color: white;
            font-family: cursive;
            font-style: italic;
            font-weight: bolder;
            font-size: 1.8em;
            text-decoration: underline;
            border:5px double white;
          

        }

        #l:hover {
            background-color: #453a40;
            cursor: pointer;
            color: black;

        }

        #r:hover {
            background-color: wheat;
            cursor: pointer;
            color: black;
        }

        #g {
            margin: 0.4em 0em 0em 0em;
            color: white;
            font-size: 1.5em;
            text-decoration: underline;
        }

        #d {
            margin: 0.4em 0em 0em 0em;
            height: 4vh;
            width: 15vw;


            background-color: white;
            color: black;
            font-family: cursive;
            font-style: italic;
            font-size: 16px;
            text-decoration: underline;

        }

        .i1 {
            width: 13vw;
            margin: 0.85em 0em 0em 0.8em;
            height: 5vh;


            background-color: white;
            color: black;
            font-family: cursive;
            font-style: italic;
            font-size: 1.19em;
            text-decoration: underline;
            border: 3px solid rgb(52, 121, 57);
            border-bottom-color: blue;
            border:none;
        }

        #dob {
            color: whitesmoke;
            margin: 0.45em 0em 0em 0em;
            border:none;


        }
    </style>
</head>

<body>



    <div class="box">
        <center id="sa">
            <h1>SIGN UP</h1>
        </center>
        <br><br>
        <form action="signuphelp.php" method ="POST">
            <input class="i1" type="text" name = "Fname" placeholder="Enter your first name" required>


            <input class="i1" type="text" name = "Lname" placeholder="Enter your last name" required>



            <center> <input class="i" type="email" name = "Email" placeholder="Enter your Email " required></center>



            <center> <textarea class="i"  id="" cols="50" rows="5" name = "Address" placeholder="Enter your address" required></textarea>
            </center>



            <center> <input class="i" type="text" name = "City" placeholder="Enter your City" required></center>




            <center> <input class="i" type="text" name = "State" placeholder="Enter your State" required></center>

           

           
            


            <center> <input class="i" type="number"name = "Contact" placeholder="Enter your Contact number" required></center>

            <center> <input class="i" type="text"name = "x" placeholder="Enter your Gender" required></center>
           
            <center> <input class="i" type="text" name = "Username"placeholder="Username " required></center>

            <center> <input class="i" type="password" name="Pass"  placeholder="Enter your password" required></center>
<br><br>
            <center><button id="r" type="reset"> RESET</button></center>
<br><br>
            <button id="l" type="submit" onclick="popUp()"> SIGN UP </button>
            <script>
                  function popUp()
    {
        alert("Sign Up sucessfull");
    }
              </script>

        </form>

    </div>


</body>

</html>