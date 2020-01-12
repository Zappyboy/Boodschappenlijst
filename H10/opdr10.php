<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 10</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "boodschappen");
if ($conn->connect_error) {
    die("Connect error: " . $conn->connect_error);
}
$sql = "SELECT product.idproduct, product.omschrijving, product.tijd FROM product, klanten WHERE klanten. ORDER BY ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table> 
<tr>
<th>ID</th> <!This is HTML table heading>
<th>Product naam</th>
<th>Prijs</th>
<th>Klant</th>
</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
<td>" .$row["id"]. "</td>
<td>" .$row["omschrijving"]. "</td>
<td>" .$row["prijs"]. "</td>
<td>" .$row["klantnaam"]. "</td>
</tr>";
    }
    echo "</table>";
}else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
<?php
