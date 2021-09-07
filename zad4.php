<?php

function silnia($n){
if($n ==1){
              return 1;
}
else{
    return $n* silnia($n-1);
}
}

if(isset($_POST['Show'])){
$liczba = $_POST['liczba'];
echo(silnia($liczba));

}
?>

<form action="" method= "POST">
    <input type="text" name="liczba">
    <input type='submit' name='Show' value='Show'>
<form>
    