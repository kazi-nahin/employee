<?php

function connectDatabase() {
    try {
        return mysqli_connect("localhost", "root", "", "db");
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}

connectDatabase();
$name = $_POST['name'];
$mail = $_POST['mail'];

$query = mysqli_query(connectDatabase(), "INSERT INTO user(name, mail)VALUES('$name''$mail')");