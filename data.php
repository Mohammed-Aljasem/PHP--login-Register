<?php
// error_reporting(E_ERROR | E_PARSE);

//========================Register function=======================


if ($_POST['email']) {

  session_start();


  if ((!isset($_SESSION['Register']))) {

    $_SESSION['Register'] = array();
  }

  $informationUser = array("name" => $_POST['name'], "email" => $_POST['email'], "password" => $_POST['password']);



  if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (empty($_POST['name'] || $_POST['email'] || $_POST['password'])) {
      echo 'please enter your information';
    } else {
      echo "<pre>";


      $emailsCheck = array_keys($_SESSION['Register']);
      $a = in_array($_POST['email'], $emailsCheck);
      print_r($emailsCheck);


      if ($a) {
        echo "Your email is already exist   ";
      } else {

        $_SESSION['Register'][$_POST['email']] = $informationUser;
        echo "Your email  is registered";
      }
    }

    echo "<pre>";


    print_r($_SESSION['Register']);
  }
} elseif ($_POST['loginEmail']) {

  //========================login function=======================
  session_start();


  if (empty($_POST['loginEmail'] || $_POST['loginPassword'])) {

    echo 'please enter your information';
  } elseif (!empty($_POST['loginEmail'] || $_POST['loginPassword'])) {

    $emailsCheck = array_keys($_SESSION['Register']);
    $emails = in_array($_POST['loginEmail'], $emailsCheck);

    $passwords = in_array($_POST['loginPassword'], $_SESSION['Register'][$_POST['loginEmail']]);


    if ($emails && $passwords) {
      echo 'you are log in now';
    } else {
      echo 'enter email registered or right password';
    }
  }
}
