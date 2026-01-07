


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action = "indexSeven.php" method = "post">
        <label> Enter a country </label>
            <input type = "text" name = "Country">
            <input type = "submit">
        </form>
</body>
</html>
<?php
$capitals = array("USA"=> "WASHINGTON D.C.",
                        "Japan" => "KYOTO",
                        "France" => "Paris", 
                        "india" => "New Delhi");


                        // $capital = $capitals[$_POST["Capital"]]; //$POST is the variable

                        if (!empty($_POST["Capital"]) && isset($capitals[$_POST["Capital"]])) {
    echo "The capital is " . $capitals[$_POST["Capital"]];
} else {
    echo "Capital not found.";
}

    // echo "The capital is {$capital}";
    // echo $capital;
?>


