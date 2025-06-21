<?php
// Simple vulnerable homepage
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Vulnerable: hardcoded weak credentials
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
        $_SESSION['loggedin'] = true;
        echo '<h2>Welcome, admin!</h2>';
    } else {
        echo '<h2>Login failed</h2>';
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Simple WP Test Site</title></head>
<body>
<h1>Simple WordPress-like Site</h1>
<?php if (empty($_SESSION['loggedin'])): ?>
<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<?php else: ?>
<p>Secret admin content here.</p>
<?php endif; ?>
</body>
</html>
