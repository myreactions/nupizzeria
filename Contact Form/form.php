<?php
if($_POST["message"]) {
mail("example@example.com", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Email Form</title>
  <style>
    
  </style>
</head>
<body>
<form method="post" action="form.php">
  <textarea name="message"></textarea>
  <input type="submit">
</form>
</body>
</html>
