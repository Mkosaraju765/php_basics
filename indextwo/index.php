<?php
    // $age = 16;
    // $citizen = True;


    // if(!$age >= 18 || !$citizen){
    //     echo "you can vote";
    // }
    // else{
    //         echo "You cannot vote";
    //     }
    $child = False;
    $senior = false;
    $ticket = False;

    if($child || $senior){
        $ticket = 10;
    }

    else{
        $ticket = 15;
    }

    echo "the ticket price is \${$ticket}";







?>