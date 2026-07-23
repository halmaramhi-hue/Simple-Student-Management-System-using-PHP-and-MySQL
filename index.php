<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Methods Task</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Student Form</h2>

    <form action="insert.php" method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <button type="submit">Submit</button>

    </form>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {

        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['age']; ?></td>

            <td><?php echo $row['status']; ?></td>

            <td>
<a class="toggleBtn"
href="toggle.php?id=<?php echo $row['id']; ?>">
    <button>Toggle</button>
</a>

            </td>

        </tr>

        <?php

        }

        ?>

    </table>

    <script src="script.js"></script>

</body>
</html>