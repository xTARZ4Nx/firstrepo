<style>
    td {
        border: 1px solid #000;
        background: red;
        color: #fff;
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


 
/*if(isset($_GET['sub']))
         {
             $imie = $_GET['imie'];
             $nazwisko = $_GET['nazwisko'];
$query = "Insert into test(Imie,Nazwisko) values('$imie', '$nazwisko')";
 
$run =mysqli_query($conn,$query) or die(mysqli_error());
 
if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
?>
 
<form action="" method="get">
    Imie:<input type="text" name="imie"><br>
    Nazwisko:<input type="text" name="nazwisko"><br>
    <input name="sub" type="submit" value="ok">
</form>*/