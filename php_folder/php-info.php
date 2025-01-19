<?php
// Database configuration
$servername = "localhost"; // Change if not running locally
$username = "DevOps_user"; // Your MySQL username
$password = "P@ssw0rd@123!"; // Your MySQL password
$database = "Drupal_db"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the product table
$sql = "SELECT product_id, product_name, product_description, price, quantity FROM product";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_name']}</td>
                <td>{$row['product_description']}</td>
                <td>{$row['price']}</td>
                <td>{$row['quantity']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No products found.";
}

// Close connection
$conn->close();
?>
