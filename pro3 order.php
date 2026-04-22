<?php

$conn = new mysqli("localhost", "root", "", "CACTUS_hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$food = $_POST['food'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO orders (customer_name, food_item, quantity)
VALUES ('$name', '$food', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
