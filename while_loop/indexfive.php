<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action = "indexfive.php" method = "post">

    <input type = "submit" name = "stop" value = "stop">
</form>
</body>
</html>

<?php

//while loop : executes some code infinitely , whie some conditions remians true 

$seconds = 0;
$running = true;


while($running){

    if(isset($_POST["stop"])) // this is the post method , whee rit uses the stop button  
        {
            $running = false;
        }
    else{

        //wait 1 sec
        $seconds++;
        echo $seconds . "<br>" ;
    }
}
?>
