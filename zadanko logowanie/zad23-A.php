<?php

$user= 'root';
$pass= '';
$host = 'localhost';
$base = 'logowanie_sasin';
$conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);
   $sql = "SELECT * FROM tabela_sasin";

if (isset($_POST['loguj']))
    {
$login = ($_POST['login']);
$haslo = ($_POST['haslo']);
        
if ("SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".($haslo)."';")) > 0)
{
           
$_SESSION['no i witam szefa'] = true;
$_SESSION['login'] = $login;
           
        }
 else echo "złe dane hopie wpisałeś";
    }
?>

<form method="POST" >
<b>Login:</b> <input type="text" name="login"><br>
<b>Hasło:</b> <input type="password" name="haslo"><br>
<input type="submit" value="Zaloguj" name="loguj">
</form>