<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Database Website</title>
</head>
<body>
    <h1>User List</h1>

    <?php
    // Database connection
    $host = "localhost";
    $username = "root"; // Default username for XAMPP MySQL
    $password = ""; // Default password for XAMPP MySQL
    $database = "test"; // Change to your database name

    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch data from database
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    // Display data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<th>Username</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['user']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    mysqli_close($conn);
    ?>

</body>
</html>
