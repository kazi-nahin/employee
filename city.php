<?php

function connectDatabase() {
    try {
        return mysqli_connect("localhost", "root", "", "employee");
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}

$q = "SELECT * from employee where city = 'newyork' ";
$query = mysqli_query(connectDatabase(), $q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    while ($result = mysqli_fetch_assoc($query)) { ?>
        <h2><?php echo $result['person_name'];?></h2>
        <h1><?php echo $result['city'];?></h1>
        <br>

    <?php
    } ?>
    
</body>
</html>
