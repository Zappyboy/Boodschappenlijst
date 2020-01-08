<?php
$conn = mysqli_connect("localhost", "root", "", "boodschappen");
if (!$conn) {
    die("Connection failed:" .mysqli_connect_error());
}
if (isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
    $query = mysqli_query($conn, "SELECT tijd FROM product WHERE JOINdate BETWEEN
    '$txtStartDate' and '$txtEndDate' ORDER BY JOINdate");
    $count=mysqli_num_rows($query);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Filter date</title>
</head>
<body>
<form method="post">
    <input type="date" name="txtStartDate">
    <input type="date" name="txtEndDate">
    <p>
        <input type="submit" name="search" value="Search product date">
    </p>
    <?php
    if($count == "0")
    {
        echo '<h2>No Date Found</h2>';
    }
    else
    {
        while ($row = mysqli_fetch_array($query)){
            $result = $row['tijd'];
            $output = '<h2>'.$result.'</h2>';
            echo $output;
        }
    }
    ?>
</form>
</body>
</html>