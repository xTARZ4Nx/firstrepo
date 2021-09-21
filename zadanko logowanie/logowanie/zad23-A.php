<?php

  $user= 'root';
  $pass= '';
  $host = 'localhost';
  $base = 'logowanie_sasin';
  $log= mysqli_connect($host,$user,$pass, $base);
  mysqli_select_db($log,$base);

  $sql = "SELECT * FROM `tabela_sasin` ORDER BY `tabela_sasin`.`id` ASC";
  $result = $log->query($sql);

  if(isset($_POST['dodaj'])) {
      
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  $query = "select * FROM tabela_sasin WHERE Login='$login' AND Haslo='$haslo'";
  $run = mysqli_query($log,$query) or die(mysqli_error($log));
  
  $a = $log->query($query);

  if($a->num_rows>0){

header('Location: zadanka.html'); 
echo "Super jesteś zalogowałeś się";
  }
  else{
     echo "Zle haslo lub login";
  }
  }
?>

<form action="" method="POST">

login: <input type="text" name="login"><br>
Haslo: <input type="password" name="haslo"><br>
 <input name="dodaj" type="submit" value="ok">
</form>

</html>