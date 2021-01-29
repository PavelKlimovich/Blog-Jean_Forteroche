<?php

session_start();

include_once '../../model/Connect.php';

$bdd = new Connect();

$password = htmlspecialchars($_POST['password']);
$mail = htmlspecialchars($_POST['email']);

$errors = [];

if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas rénseigné corectement votre email";
}
if (!array_key_exists('password', $_POST) || $_POST['password'] == '') {
    $errors['password'] = "Vous n'avez pas corectement rénseigné votre password";
}
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../../index.php?action=connect');
} else {
    $bdd->Connection($password, $mail);
}
