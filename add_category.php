<?php 
    require ("connection.php")
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

        // VALUES should be inside single quote not double quotes
        $sql = "INSERT INTO category (category_name, category_entry_date) VALUES ('$category_name','$category_entryDate')";

        if($connection-> query($sql) === TRUE){
            echo "Data inserted successfully";
        } else {
            echo "failed to insert data !!!";
        }


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