<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"Poppins", San-serif;
        }
        .result{
            color:green;
        }
        .fail{
            color:red;
        }
        .error{
            color:blue;
        }

        .welcomeNote{
            width:100%;
            height: 50px;
            background-color: blue;
            line-height:45px;
            color:#fff;
        }
        .markSystem{
            width:600px;
            height:400px;
            margin-inline:auto;
            margin-top:40px;
            
        }
        .inputResult{
            display:flex;
            gap:5px

        }
        .inputResult h2{
            width:50%
        }

        span{
            display:block;
            width:100%;
            border: 2px solid #2cfcff;
            border-radius: 5px;
            padding:5px;
            margin:5px;

        }
        .mainHeading{
            font-size:4rem;
            text-align:center;
            text-transform: uppercase;
            color: #4c5cfc;
        }

        .spanResult span{
            text-align:center;
        }



    </style>
</head>
<body>
<?php
$name = $_POST["name"];
$obtmk = $_POST["obtainmks"];
$tmks = $_POST["totalmks"];
$percent = ($obtmk/$tmks)*100;
$percentage = (int)$percent;
?>
<div class="welcomeNote">
    <h1>Welcome <?php echo $name; ?> </h1>
</div>
<h1 class="mainHeading">Grading System</h1>
<div class="markSystem">
    <div class="inputResult">
        <h2>Obtained Marks : <span><?php echo $obtmk?></span></h2>
        <h2>Total Marks : <span><?php echo $tmks?></span></h2>
    </div>
    <h2>Percentage : <span><?php echo $percentage?>%</span></h2>
    <h2 class="spanResult">Result  : 
        <?php 
        if($percentage > 100){
            echo "<span class='error'>Your obtained numbers are mistyped / wrong, it should be equal to or less than total marks.</span>";
        } elseif($percentage ==100){
            echo "<span class='result'>You are Topper.</span>" ;
        }elseif($percentage >= 90){
            echo "<span class='result'>A1</span>";
        } elseif($percentage >= 80){
            echo "<span class='result'>A+</span>";
        } elseif($percentage >= 70){
            echo "<span class='result'>A</span>";
        } elseif($percentage >= 60){
            echo "<span class='result'>B</span>";
        } elseif($percentage >= 50){
            echo "<span class='result'>C</span>";
        } elseif($percentage >= 40){
            echo "<span class='result'>D</span>";
        }  elseif($percentage >= 33){
            echo "<span class='result'>E</span>";
        }else{
            echo "<span class='fail'>Your result is Fail. Better luck! </span> ";
        }
        ?>
    </h2>
</div>







    
</body>
</html>