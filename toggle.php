<?php

include "db.php";

$id = $_GET["id"];

$sql = "UPDATE users
        SET status = IF(status=0,1,0)
        WHERE id=$id";

$conn->query($sql);

header("Location: index.php");

?>