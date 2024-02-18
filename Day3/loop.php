<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>While Loop</h1>

    <?php
       $i=1;
       while($i<=5){
        echo "$i<br>";
        // $i=$i+1;
        $i++;
       } 
    ?>

    <h1>For Loop</h1>

    <?php
    for($i=10;$i<=5;$i++){
        echo "$i<br>";
    }
    ?>

    <h1>Do While Loop</h1>

    <?php
        $j=100;
        do{
            echo "$j<br>";
            $j++;
        }while($j<=5);
    ?>
    
</body>
</html>