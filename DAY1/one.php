<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Day 1 PHP</h1>
    
    <?php 
        echo "Day 1 PHP <br> HELLO EVERYONE";
    ?>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est quibusdam inventore distinctio dolore nam totam et excepturi, incidunt eveniet harum sed nemo pariatur libero ducimus. Amet tempora esse provident quaerat!</p>
    
    <?php
        echo "Hello World";
    ?>

    <br>

    <?php

        $a = 10;
        $b = 5;
        $sum = $a + $b;
        echo " Value of a is $a";
        echo "<br>sum is: $sum";
    ?>

    <h1>Swap</h1>

    <?php
    
        $num1=10;
        $num2=21;
        echo "1st val=$num1 <br> 2nd val=$num2";
        $num3=$num1;
        $num1=$num2;
        $num2 =$num3;
        echo "<br>1st val=$num1 <br> 2nd value=$num2";
    
    ?>

    <br>

    <h1>Swap without using 3rd</h1>

    <?php
        $n1=30;
        $n2=10;
        echo "<br>1st=$n1 2nd=$n2";
        $n1=$n1+$n2;
        $n2=$n1-$n2;
        $n1=$n1-$n2;
        echo "<br>1st=$n1 2nd=$n2";
        
    ?>



</body>
</html>