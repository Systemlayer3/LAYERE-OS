<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $apikey = htmlspecialchars($_POST["apikey"]);
  file_put_contents("ai-key.txt", $apikey);
  echo "API Key saved successfully.";
}
?>
<form method="POST">
  <label>Enter OpenAI API Key:</label><br>
  <input type="text" name="apikey" required>
  <input type="submit" value="Save">
</form>
