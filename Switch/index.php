<?php

//switch = replacement to using many eleif statements, mre efficient, less code to write


$grade = "BC";

// if($grade == "A"){
//     echo "You acheived A Grade, you did great";
// }
// elseif($grade == "B"){
//     echo "You acheived B Grade, you did Good";
// }
// elseif($grade == "C"){
//     echo "You acheived C Grade, you did Okay";
// }
// elseif($grade == "D"){
//     echo "You acheived D Grade, you did Poorly";
// }
// elseif($grade == "F"){
//     echo "You acheived F Grade, you have  Failed";
// }

// else{
//     echo "{$grade} is not a valid grade";
// }

// switch($grade){
//     case "A":
//             echo "You did great";
//             break;
//     case "B": 
//             echo "You did good";
//             break;
//     case "C":
//             echo "You did okay";
//             break;
//     case "D":
//             echo " You did poorly";
//             break;
//      case "F":
//             echo " You Failed";
//             break;
//     default:
//             echo "{$grade} is not at all valid";

    $date = date("l");

    switch($date){
        case "Monday":
            echo "Travel is over, lets get back to Mondays";
            break;
        case "Tuesday":
            echo "it is Taco Tuesday!!!";
            break;
        case "Wednesday":
            echo " The work week is almost over!!";
            break;
        case "Thursday":
            echo " Its almost the weekend!";
            break;
        case "Friday":
            echo "Yay!!!, Its weekend";
            break;
        // default case " ":
        //     echo " YOu entered wrong one , you dumb"; 
    }

?>
