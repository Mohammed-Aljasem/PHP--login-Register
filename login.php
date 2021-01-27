<?php

include 'data.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="data.php" method="POST" name="login">

    <label for="email">email</label>
    <input type="email" name="loginEmail" required>
    <label for="password">password</label>
    <input type="password" name="loginPassword" required>
    <button type="submit">Register</button>
  </form>
</body>

</html>