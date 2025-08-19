<?php
include 'db.php';
 
$hotel_id = $_POST['hotel_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
 
$sql = "INSERT INTO bookings (hotel_id, name, email, checkin, checkout) 
        VALUES ('$hotel_id', '$name', '$email', '$checkin', '$checkout')";
 
if ($conn->query($sql) === TRUE) {
    header("Location: confirm.php?name=" . urlencode($name));
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
 
