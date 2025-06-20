<?php
// Dummy login (no validation for example)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Login successful (simulation)";
}
?>
<form method="post">
    <input type="text" name="user" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <button type="submit">Login</button>
</form>