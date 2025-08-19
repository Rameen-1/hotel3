<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Available Hotels in <?php echo htmlspecialchars($_GET['location']); ?></h2>
<div class="hotel-list">
<?php
$location = $_GET['location'];
$sql = "SELECT * FROM hotels WHERE location LIKE '%$location%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='hotel-card'>
                <img src='assets/hotel-images/{$row['image']}' alt='Hotel Image'>
                <h3>{$row['name']}</h3>
                <p>{$row['description']}</p>
                <p><strong>\${$row['price']}/night</strong></p>
                <a href='hotel_details.php?id={$row['id']}'>View Details</a>
              </div>";
    }
} else {
    echo "No hotels found.";
}
?>
</div>
</body>
</html>
 
