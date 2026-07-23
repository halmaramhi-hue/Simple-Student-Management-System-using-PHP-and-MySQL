<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];

    $sql = "INSERT INTO users(name, age) VALUES('$name', '$age')";

    if ($conn->query($sql) === TRUE) {

        header("Location: index.php");

    } else {

        echo "Error: " . $conn->error;

    }

}

$conn->close();

?>