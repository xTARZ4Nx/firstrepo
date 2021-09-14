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
    echo "id:";
echo "</td>";
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
        echo $row["id"];
    echo "</td>";

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

    if(isset($_GET['subplus'])) {
        $idplus = $_GET['idplus'];
        $imieplus = $_GET['imieplus'];
        $nazwiskoplus = $_GET['nazwiskoplus'];
        $query = "INSERT INTO test(id, Imie, Nazwisko) values('$idplus', '$imieplus', '$nazwiskoplus')";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
}
 
if(isset($_GET['sub'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM test WHERE id='$id'";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
}
?>
 
<br>
<br>
 
<form action="" method="get">
    Dodaj nowa osobe: <br>
    ID: <input type="number" name="idplus"><br>
    Imie: <input type="text" name="imieplus"><br>
    Nazwisko:  <input type="text" name="nazwiskoplus"><br>
    <input name="subplus" type="submit" value="ok">
</form>
 
<form action="" method="get">
    ID do usunięcia: <br><input type="number" name="id"><br>
    <input name="sub" type="submit" value="ok">
</form>





