<?php
//variables//
$sessionId = $_POST["sessionid"];
$serviceCode = $_POST["servicecode"];
$pnoneNo = $_POST["phoneno"];
$text = $_POST["text"];


if( $text == "" ){
    $response = "CON What would you like to check \n";
    $response .= "1.your account \n";
    $response .= "2.your dashboard \n";
    $response .=  "3.your balance";
        
}elseif ($text == "1"){
    $response = "CON choose the information you want to view \n";
    $response .= "1.Account NO \n";
    $response .= "2.credit account \n";
    $response .= "3.saving account \n";

}elseif ($text == "2"){
    $response = "CON choose the information you want to view \n";
    $response .= "1.your username \n";
    $response .= "2.your password \n";
    $response .= "3.your points \n";
}elseif ($text == "3"){

    $Balance = "ksh 2,305,876";

    $response = "END your account balance is" .$Balance;
}elseif ($text == "1*1"){
    $acc = "54784568";


    $response = "END your account number is" .$acc;
}elseif ($text == "1*2"){
    $cre ="54444";

    $response = "END you credit account balance" .$cre;
}elseif ($text == "1*3"){
    $savings = "4534";

    $response = "END you saving balance is" .$savings;
}elseif ($text == "2*1"){
    $usernmane = "offline";

    $response = "END your username is ".$username;
}elseif ($text == "2*2"){
    $pass = "353653fre";

    $response = "END your password id" .$pass;
}elseif ($text == "2*3"){
    $points = "5443";

    $response = "END your points are" .$points;
}
header('content-type; text/plain');
echo $response;




?>