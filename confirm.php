<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmed</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Thank you, <?php echo htmlspecialchars($_GET['name']); ?>!</h2>
<p>Your booking is confirmed. A confirmation email has been sent to you.</p>
<a href="index.php">Go Back to Home</a>
</body>
</html>
 
