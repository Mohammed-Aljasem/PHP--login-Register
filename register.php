<?php


// session_start();


// if ((!isset($_SESSION['Register']))) {

//   $_SESSION['Register'] = array();
// }

// $informationUser = array("name" => $_POST['name'], "email" => $_POST['email'], "password" => $_POST['password']);



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {



//   if (empty($_POST['name'] || $_POST['email'] || $_POST['password'])) {
//     echo 'please enter your information';
//   } elseif ($_POST['name'] == '' || $_POST['email'] == '' || $_POST['password'] == '') {
//     echo "<pre>";
//     if ($_POST['password'] === ' ') {

//       echo ' empty  ';
//     }

//     $emailsCheck = array_keys($_SESSION['Register']);
//     $a = in_array($_POST['email'], $emailsCheck);
//     print_r($emailsCheck);


//     if ($a) {
//       echo "Your email is already exist   ";
//     } else {

//       $_SESSION['Register'][$_POST['email']] = $informationUser;
//       echo "Your email  is registered";
//     }
//   }

echo "<pre>";


//   print_r($_SESSION['Register']);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="data.php" method="POST" name="register">
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="email">email</label>
    <input type="email" name="email">
    <label for="password">password</label>
    <input type="password" name="password" required>
    <button type="submit">Register</button>
  </form>
  <div>

  </div>
</body>

</html>