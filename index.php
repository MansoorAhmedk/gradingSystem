<?php
// $result = 91;

// if($result >= 90){
//     echo "Your Grade is A+";
// }elseif ($result >= 80) {
//     echo "Your Grade is A";
// }elseif ($result == 70) {
//     echo "Your Grade is B";
// }elseif ($result == 60) {
//     echo "Your Grade is C";
// }else{
//     echo "You are fail";
// }

// for-loop
// while-loop
//do-while loop
// foreach loop

// for-loop
// for($i = 1; $i <= 20; $i++){
//     echo "Web Development Class $i <br>";
// }

// while - loop

$i = 0;
// while ($i<=100) {
//     echo "$i <br>";
//     $i++;
// }


// $a = 5;

// do {
//     echo "Hello World! $a <br>";
//     $a++;
// } while ($a <= 10);






















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"Poppins", San-serif;
        }
        .mainContainer{
            width:100%;
            text-align:center;
        }
        .mainContainer h1{
            text-transform: uppercase;
            font-size: 4rem;
        }

        .container{
            width: 600px;
            height: 400px;
            margin-inline:auto;
        }

        .innerContainer input{
            width: 100%;
            padding: 10px;
            margin-top:10px;
            border-radius: 10px;
            font-size: 1rem;
            border: 1px solid #2cfcff;

        }

        input[type=submit]{
            width: 100%;
            padding: 10px;
            margin-top:10px;
            font-size: 2rem;
            border: 1px solid #2cfcff;
            background-color: #2cfcff;
            border-radius: 10px;
            font-weight:700;
        }


        
        
    </style>
</head>
<body>

<div class="mainContainer">
<h1>Grading Calculator</h1>
<div class="container">
    
<form action="welcome.php" method="POST">
<div class="innerContainer">
        <div class="inputContainer"> 
            <input type="text" id="name" name="name" placeholder="Enter your Name">
        </div>
    </div>
    <div class="innerContainer">
        <div class="inputContainer"> 
            <input type="number" id="name" name="obtainmks" placeholder="Enter your Obtain Marks">
        </div>
    </div>
    <div class="innerContainer">
        <div class="inputContainer"> 
            <input type="number" name= "totalmks" placeholder="Enter your Total Marks">
        </div>
     </div>
    <input type="submit" value="SUBMIT">
</form>
</div>
</div>
    
</body>
</html>


