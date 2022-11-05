





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
            background-image: url(i1.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

        .box {



            height: 45vh;
            width: 60vh;
            position: absolute;
            top: 12em;
            left:36em;
            border: 3px solid white;
            border-radius: 3em;
            box-shadow: -10px -10px 11px rgb(99, 89, 89);

            background-repeat: no-repeat;
            background-size: cover;
            background-color: Black;

        }

        #sa {
            color: white;
            margin: 2em 0em 0em 0em;

        }

        #sa:hover 
        {

            color: red;
            cursor: pointer;
        }

        .i {
            width: 20vw;
            margin: 2em 0em 0em 0em;
            height: 5vh;
            

            background-color: white;
            color: white;
            font-family: cursive;
            font-style: italic;
            font-size: 1.19em;
            text-decoration: underline;
            border: 3px solid rgb(52, 121, 57);
            border-bottom-color: blue;
            border:none;
            background:transparent;

        }

        .i1 {
            width: 20vw;
            margin: 1.3em 0em 0em 0em;
            height: 5vh;

           
            background-color: white;
            color: white;
            font-family: cursive;
            font-style: italic;
            font-size: 1.19em;
            text-decoration: underline;
            border: 3px solid rgb(52, 121, 57);
            border-bottom-color: blue;
            border:none;
            background:transparent;
        }



        #l
         {
            width: 29.5vw;
            margin: 2em 0em 0em 0em;
            height: 6vh;


            background-color: black;
            color: white;
          
            border: 5px solid white;
            font-family: cursive;
            font-style: italic;
            font-weight: bolder;
            font-size: 1.8em;
            text-decoration: underline;

        }

        #l:hover 
        {
            
            background-color: #453a40;
            cursor: pointer;
            color: black;

        }



        #b2 
        {
            width: 29.5vw;
            margin: 0.5em 0em 0em 0em;
            height: 6vh;


            background-color: rgb(44, 100, 204);
            text-decoration: none;
            color: black;
            border-radius: 5em;
            border: 3px solid black;
            font-family: cursive;
            font-style: italic;
            font-weight: bolder;
            font-size: 1.8em;
            text-decoration: underline;
        }

        #b2:hover
         {
            background-color: maroon;
            cursor: pointer;
            color: black;
        }

     
    </style>
</head>

<body>


    <div class="box">
        <center id="sa">
            <h1>WELCOME</h1> </center>
            <form action ="loginhelp.php" method = "POST">

                <center> <input class="i" type="text"  name = "Username" placeholder="Username " required></center>

                <center> <input class="i1" type="password" name="Pass" id="" placeholder="Enter your password" required></center>

     

                <button id="l" type="submit"  > LOGIN </button>
             


            </form>
           

    </div>


</body>

</html>