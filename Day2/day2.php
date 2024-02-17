<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Echo</h1>
    <?php
    echo "Hello";
    echo '<br>Hello<br>';
    $a = 10;
    echo "A= $a<br>";
    echo 'A= $a <br>';
    echo 'A='.$a;
    echo "A=".$a;
    
    ?> 
    <h1>IF ELSE</h1>
    <?php
        $age=10;
        if($age>=18){
            echo "Vote";

        }else{
            echo "Not";

        }
    ?>

    <h1>ODD EVEN</h1>

    <?php
        $n=81;
        if($n%2==0){
            echo "Even";
        }else{
            echo "Odd";
        }
    ?>
<br>
<h1>+ or -</h1>
    <?php
    $num=-2;
    if($num>0){
        echo "$num Pos";
    }else{
        echo "$num Neg";
    }
    ?>

    <h1>+/-/0</h1>

    <?php
    $ab=-57;
    if($ab>0){
        echo 'Pos';
    }else if($ab<0){
        echo 'Neg';
    }else if($ab==0){
        echo 'Zero';
    }
    else{
        echo 'Enter right choice';
    }
    ?>
    <h1>Day</h1>

    <?php
    $day=12;
    if($day==1){
        echo "Sunday";
    }else if($day==2){
        echo "Monday";
    }else{
        echo "Enter right choice";
    }
    ?>


</body>
</html>