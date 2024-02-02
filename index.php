// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <title>2-Tier App</title>
// </head>
// <body>
//     <h1>Hello, 2-Tier App!</h1>
//     <?php
//     // Connect to MySQL database (replace with your actual database credentials)
//     $conn = new mysqli("mysql-host", "username", "password", "database");

//     // Check the connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Query the database (replace with your actual query)
//     $result = $conn->query("SELECT * FROM example_table");

//     // Display results
//     echo "<ul>";
//     while ($row = $result->fetch_assoc()) {
//         echo "<li>" . $row["column_name"] . "</li>";
//     }
//     echo "</ul>";

//     // Close the database connection
//     $conn->close();
//     ?>
// </body>
// </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>2-Tier App</title>
</head>
<body>
    <h1>Hello, 2-Tier App!</h1>
    <?php
<?php
// Fetching database credentials from environment variables
$dbUsername = getenv('DB_USERNAME');
$dbPassword = getenv('DB_PASSWORD');

// Connect to MySQL database
$conn = new mysqli("mysql-host", $dbUsername, $dbPassword, "database");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database (replace with your actual query)
$result = $conn->query("SELECT * FROM example_table");

// Display results
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row["column_name"] . "</li>";
}
echo "</ul>";

// Close the database connection
$conn->close();
?>
</body>
</html>
