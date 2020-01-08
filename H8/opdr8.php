<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 8</title>
</head>
<body>
<table>
    <tr>
        <th>Product</th>
        <th>ID</th>
        <th>Time</th>
        <th>Delete</th>
    </tr>
    <?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "boodschappen");
    $sql  = "SELECT *  FROM product";
    $records  = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['omschrijving']."</td>";
        echo "<td>".$row['idproduct']."</td>";
        echo "<td>".$row['tijd']."</td>";
        echo "<td><a href=delete.php?id=".$row['idproduct'].">Delete</a></td>";
    }

    ?>
</table>
</body>
</html>