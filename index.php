<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hilton Booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Hilton Hotels</h1>
    </header>
    <section class="search-section">
        <form action="search.php" method="get">
            <input type="text" name="location" placeholder="Enter location" required>
            <input type="date" name="checkin" required>
            <input type="date" name="checkout" required>
            <button type="submit">Search</button>
        </form>
    </section>
</body>
</html>
 
