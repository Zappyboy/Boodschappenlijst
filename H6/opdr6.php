<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 6</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Omschrijving</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "boodschappen");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT idproduct, omschrijving FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["idproduct"]. "</td><td>" . $row["omschrijving"]. "</td></tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>
</body>
</html>