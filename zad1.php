<style>
    td {
        border: 1px solid #FF0000;
        background: #0003FF;
        color: #16FF00;
    }
</style>
 
<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);
 
   $sql = "SELECT * FROM test";
    $result = $conn->query($sql);
 
    echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "Imie:";
        echo "</td>";
        echo "<td>";
            echo "Nazwisko:";
        echo "</td>";
    echo "</tr>";
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
 
            echo "<td>";
                echo $row["imie"];
            echo "</td>";
 
            echo "<td>";
                echo $row["nazwisko"];
            echo "</td>";
 
        echo "</tr>";
        //echo "Imie: ".$row["Imie"]." Nazwisko: ".$row["Nazwisko"]."<br><br>";
    }
    } else {
        echo "0 results";
    }
    echo "</table>";

    if(isset($_GET['sub']))
    {

        $imie = $_GET['imie'];
        $query = "delete from test where imie = '$imie'";
        $run =mysqli_query($conn,$query) or die(mysqli_error());

    }
    ?>
    <form action="" method="get">
    imie:<input type="text" name="imie"><br>
    <input name="sub" type="submit" value="ok">
    </form>






