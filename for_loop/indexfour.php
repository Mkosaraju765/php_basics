
<!-- 
    // //for loop: repeat the code a certain number of times 

    // for ($i = 8; $i <= 2; $i+3)
    // {
    //     echo $i . 
    //     "<br>";

    // } -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action = " indexfour.php" method = "post">
        <label >Enter a number to start the count to: </label>
        <input type = "text" name = "counter">
        <input type = "submit" value = "start">
        </form>
        </body>
    </html>

    <?php

    //for loop : to repeat the loop "n" number of times 
    $counter = $_POST["counter"]; //super global var

    for ($j = 0; $j <= $counter; $j++) //$i is the variable i
        {
            echo $j. "<br>";
        }
    //[""] this is the global super variable

    
    ?>