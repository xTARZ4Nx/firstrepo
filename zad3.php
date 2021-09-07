<?php
if(isset($_POST['oblicz']))
{
$log = $_POST['log'];
$pass = $_POST['pass'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$miasto = $_POST['miasto'];

if($log =='jacek' && $pass == 'owca')
{
echo('zalogowany');
}
else{
    echo('hopaku co ty robisz, sprobuj ponownie!!!');
}
}

?>

<form action="" method= "POST">
   tajne hasło <input type="text" name="log">
    <input type='password' name='pass'> <br>
    imie <input type="text" name="imie"><br>
    nazwisko<input type="text" name='nazwisko'> <br>
    miasto<input type="text" name='miasto'> <br>
    <input type='submit' name='oblicz' value='Show'><br>
</form>

