<?php 
    require ("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Categories</title>
</head>

<body>
    <?php
       $sql= "SELECT * FROM category";

       $query = $connection ->query($sql);

       //$data = mysqli_fetch_assoc($query); putting data into an associative array format
       // echo $data ["category_name"];  this give the values under that specific column name and this will show the first value of that column. To get all the data we should use a loop.
       echo "<table border='1'> <tr> <th> Category List </th> <th> Date </th> <th>Action</th> </tr>";
       while ($data = mysqli_fetch_assoc($query)){
        $category_id= $data ["category_id"];
        $category_name= $data ["category_name"];
        $category_entryDate= $data ["category_entry_date"];
        echo "<tr><td> $category_name </td><td>$category_entryDate</td><td><a href='edit_category.php?id=$category_id'>Edit</a></td></tr>";
       }
       echo "</table>"


    ?>
</body>

</html>