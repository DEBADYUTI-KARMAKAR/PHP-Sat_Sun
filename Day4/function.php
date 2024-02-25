<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Takes nothing returns nothing</h1>
<?php
    function f1(){
        echo "Hello PHP<br>";
    }
    f1();
    f1();
    f1();
    f1();

    function sum(){
       $a=10;
       $b=5;
       $c=$a+$b;
       echo "Sum is".$c; 
       echo "Sum is $c";
    }

    sum();

    function swap(){
        $f = 20;
        $g = 10;
        $temp = $f;
        $f=$g;
        $g=$temp;
        
        echo "<br>F=".$f;
        echo "G=".$g;
    }
    swap();

?>
    <!-- <?php
f1();
    ?> -->



<h1>Takes nothing returns something</h1>
<?php

    function sub(){
        $num1=10;
        $num2=5;
        $res = $num1- $num2;
        return $res;
        // return $num1-$num2;
        // return $num1,$num2;
    }

    $r=sub();
    echo "sub is".$r;

?>

<h1>Takes something returns nothing</h1>
<?php

    function mult($a,$b){
        $r = $a*$b;
        echo "Mult:$r";
        echo "Mult:".$r;
    }

    mult(40,20);

    $k=20;
    $h=10;
    mult($k,$h);

?>


<h1>Takes something returns something</h1>

<?php
    function div($a,$b){
        $d = $a/$b;
        return $d;
    }
    $result = div(30,10);
    echo "<br>Res:".$result;
?>
</body>
</html>