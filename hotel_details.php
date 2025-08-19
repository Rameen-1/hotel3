<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM hotels WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="hotel-details">
    <img src="assets/hotel-images/<?php echo $row['image']; ?>" alt="">
    <h2><?php echo $row['name']; ?></h2>
    <p><?php echo $row['description']; ?></p>
    <p><strong>Price: $<?php echo $row['price']; ?>/night</strong></p>
 
    <form action="booking.php" method="post">
        <input type="hidden" name="hotel_id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="date" name="checkin" required>
        <input type="date" name="checkout" required>
        <button type="submit">Book Now</button>
    </form>
</div>
</body>
</html>
 
