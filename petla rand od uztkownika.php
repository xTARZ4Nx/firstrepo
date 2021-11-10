<?php
    $user="root";
    $pass="";
    $host="localhost";
    $database="uczniowie";

    $conn = new mysqli($host, $user, $pass, $database);
    mysqli_select_db($conn, $database);

    
    $wyn = array();

    if(isset($_GET['sub'])){
        
        $ile=$_GET['numer'];
        $sides=$_GET['sides'];
        $players=$_GET['players'];
        for($z=0; $z<$players; $z++){
            $p=0;
            for($i=0; $i<$ile; $i++){
                $rand=rand(1, $sides);
                $p+=$rand;

            }
            $wyn[$z]=$p;
        }
        for($j=1; $j<=$players; $j++){
            echo("gracz ". $j. ": ". $wyn[$j-1]. "<br>");
        }
    }
?>


<form action="" method="get">
liczba rzutów: <input type="text" name="numer" value=""><br>
ilościenna kość: <input type="text" name="sides" value="6"><br>
ilość graczy: <input type="text" name="players" value="2"><br>
<input name="sub" type="submit" value="ok">
</form>