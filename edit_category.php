<?php
require("connection.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>
    <?php
    if (isset($_GET["id"])) {
        $get_id = $_GET["id"];

        $sql = "SELECT * FROM category WHERE category_id=$get_id";

        $query = $connection->query($sql);

        $data = mysqli_fetch_assoc($query);

        $category_id = $data["category_id"];
        $category_name = $data["category_name"];
        $category_entry_date = $data["category_entry_date"];
    }

    if (isset($_GET['category_name'])) {
        $category_updated_name = $_GET['category_name'];
        $category_updated_date = $_GET['category_entry_date'];
        $category_updated_id   = $_GET['category_id'];

        $sql_update = "UPDATE category SET category_name='$category_updated_name', category_entry_date = '$category_updated_date' WHERE category_id=$category_updated_id";

        if ($connection->query($sql_update) == TRUE) {
            echo "Update Successful";
        } else {
            echo "Failed to update";
        }
    }
    ?>

    <form action="edit_category.php" method="GET">
        Category: <br>
        <input type="text" name="category_name" value="<?php echo  $category_name ?>"> <br> <br>
        Category Entry Date: <br>
        <input type="date" name="category_entry_date" value="<?php echo  $category_entry_date ?>"> <br> <br>
        <!-- Category ID: <br> -->
        <input type="text" name="category_id" value="<?php echo  $category_id ?>" hidden>

        <!-- <br> <br> -->
        <input type="submit" value="Update">
    </form>
</body>

</html>