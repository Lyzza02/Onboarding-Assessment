<?php
    // for Part 2
    $words = array("the", "quick", "brown", "fox");


    //for part 3
    function addition($num1, $num2, $num3){
        $answer = $num1+$num2+$num3;
        return $answer;
    }

    function average($num1, $num2, $num3){
        $answer = ($num1+$num2+$num3) / 3;
        return $answer;
    }

    function minValue ($num1, $num2, $num3){
        if ($num2 < $num1 && $num2 < $num3)
            return $num2;
        else if ($num1 < $num2 && $num1 < $num3)
            return $num1;
        else{
            return $num3;
        }
    }

    function maxValue ($num1, $num2, $num3){
        if ($num2 > $num1 && $num2 > $num3)
            return $num2;
        else if ($num1 > $num2 && $num1 > $num3)
            return $num1;
        else{
            return $num3;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Values</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <h2>Part 1</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        A cumque sint corporis id! Maiores autem, 
        sint repellendus earum laudantium sapiente officiis voluptatum aperiam ipsam 
        corporis iste ea dolorum blanditiis magnam. </p>
    <a href="https://www.w3schools.com/">W3 schools</a> 


    <h2>Part 2</h2>
    <?php 
        for ($x = 0; $x < count($words); $x++){
            echo $words[$x]." ";
        }
    ?>


    <h2>Part 3</h2>
    <p>My Parameter Values: 25, 13, 6</p>
    <p> Addition: <?php echo addition(25, 13, 6)?></p>
    <p> Average: <?php echo average(25, 13, 6)?></p>
    <p> Min value: <?php echo minValue(25, 13, 6)?></p>
    <p> Max value: <?php echo maxValue(25, 13, 6)?></p>

</body>
</html>