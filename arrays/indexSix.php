<?php
        //array = "variable which can hold more than one value at 

        // $foods = array("apple", "orange", "banana", "coconut");

        // foreach($foods as $food )
        // {
        //     echo $food . "<br>";

        // }

    //associate arry - an array made of key => vlaue pairs 

    $capitals = array("USA"=> "WASHINGTON D.C.",
                        "Japan" => "KYOTO",
                        "France" => "Paris", 
                        "india" => "New Delhi");

//$capitals["USA"] = "Las Vegas";
//$capitals["China"] = "Beijing";
//array_pop($capitals);
// array_shift($capitals); //this will shift away the USA out of the arrays 

$keys = array_keys($capitals);
// $values = array_values($capitals);

$capitals = array_flip($capitals);

//$k array_keys($capitals);

foreach($capitals as $key => $value) {
    echo "{$key} = {$value} <br> ";


}





?>
