<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch Case</h1>
    <?php
    $day=3;

    switch($day){
        case 1:
            echo "sunday";
            break;
        case 2: 
            echo  "Monday";
            break;
        default:
            echo "Enter right choice";
    }
    
    ?>

    <h1>Calculator</h1>
    <?php
        $key ="+";
        $num1=10;
        $num2=20;
        switch($key){
            case "+":
                $res=$num1+$num2;
                echo "Sum is $res";
                break;
            case "-":
                $res=$num1-$num2;
                echo "Sub is $res";
                break;
            case "*":
                $res=$num1*$num2;
                echo "Mult is $res";
                break;
            case "/":
                $res=$num1/$num2;
                echo "Div is $res";
                break;
            default:
                echo "Enter right choice";
        }
    ?>
    

    
</body>
</html>