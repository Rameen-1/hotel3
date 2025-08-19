<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup - Hilton Booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Create Account</h2>
<form method="post">
    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="signup">Sign Up</button>
</form>
<p>Already have an account? <a href="login.php">Login here</a></p>
 
<?php
if (isset($_POST['signup'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "Email already exists.";
    } else {
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
        echo "Account created! <a href='login.php'>Login now</a>";
    }
}
?>
</body>
</html>
 
