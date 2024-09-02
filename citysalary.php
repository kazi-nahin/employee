<?php

function connectDatabase() {
    try {
        return mysqli_connect("localhost", "root", "", "employee");
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}

$q = "SELECT * from works inner join company 
        on company.id = works.company_id 
        where company.city = 'miami'
        and works.salary > 100000
        ";
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
        <h2>Name: <?php echo $result['person_name'];?></h2>
        <h2>Salary:<?php echo $result['salary'];?></h2>
        <h2>City:<?php echo $result['city'];?></h2>
        <br>

    <?php
    } ?>
    
</body>
</html>
