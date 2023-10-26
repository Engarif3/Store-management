<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>

<body>
    <?php
    if (isset($_GET["category_name"])) {
        $category_name = $_GET["category_name"];
        $category_entryDate = $_GET["category_entry_date"];
    }
    ?>

    <form action="add_category.php" method="GET">
        Category: <br>
        <input type="text" name="category_name"> <br> <br>
        Category Entry Date: <br>
        <input type="date" name="category_entry_date"> <br> <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>