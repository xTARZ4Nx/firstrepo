<?php

$user= 'root';
$pass= '';
$host = 'localhost';
$base = 'logowanie_sasin';
$log= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($log,$base);
   $sql = "SELECT * FROM tabela_sasin";
$result = $log->query($sql);
 
    if (isset($_POST['tworz']))
    {
        $login = ($_POST['login']);
        $haslo1 = ($_POST['haslo1']);
        $haslo2 = ($_POST['haslo2']);
        $Imię = ($_POST['Imię']);
        $Nazwisko = ($_POST['Nazwisko']);
        $Szkoła = ($_POST['Szkoła']);
        $Adres	= ($_POST['Adres']);
        $Telefon = ($_POST['Telefon']);

        if ("SELECT login FROM tabela_sasin WHERE login = '".$login."';")

        {

    if ($haslo1 == $haslo2) 

            {

$query = "INSERT INTO tabela_sasin (login, haslo, Imię, Nazwisko, Szkoła, Adres, Telefon) VALUES ('$login', '$haslo1', '$Imię', '$Nazwisko', '$Szkoła', '$Adres', '$Telefon')";
$run = mysqli_query($log,$query) or die(mysqli_error());
                
echo "Brawo utworzyłes konto!";
            }
else echo "Hopaku ale te hasła sie od siebie rożnią";
        }
else echo "Ten login jest już zajęty";
    }



?>


<form method="POST" >
 <b>Login:</b> <input type="text" name="login"><br>
 <b>Hasło:</b> <input type="password" name="haslo1"><br>
 <b>Powtórz hasło:</b> <input type="password" name="haslo2"><br>
 <b>Imię:</b> <input type="text" name="Imię"><br>
 <b>Nazwisko:</b> <input type="text" name="Nazwisko"><br>
 <b>Szkoła:</b> <input type="text" name="Szkoła"><br>
 <b>Adres:</b> <input type="text" name="Adres"><br>
 <b>Telefon:</b> <input type="text" name="Telefon"><br>
<input type="submit" value="Utwórz konto" name="tworz">
</form>