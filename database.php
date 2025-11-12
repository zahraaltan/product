<?php

$username = "root"; 
$password = "";     
$dbname = "catalog_db";

$conn = mysqli_connect('localhost', $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];

    $query = "INSERT INTO products (name, price, image, description)
            VALUES ('$name', '$price', '$image', '$description')";

    if (mysqli_query($conn, $query)) {
        echo "<div style='color: green;'>Product added successfully!</div>";
    } else {
        echo "<div style='color: red;'>Error: " . mysqli_error($conn) . "</div>";
    }
}

mysqli_close($conn);
?>
