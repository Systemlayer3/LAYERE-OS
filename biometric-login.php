<?php
$valid_user = "admin";
$valid_pass = "layeros";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["username"] === $valid_user && $_POST["password"] === $valid_pass) {
    $_SESSION["loggedin"] = true;
    echo "Login successful!";
  } else {
    echo "Invalid credentials.";
  }
}
?>
<form method="POST">
  <label>Username:</label><br>
  <input type="text" name="username"><br>
  <label>Password:</label><br>
  <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
