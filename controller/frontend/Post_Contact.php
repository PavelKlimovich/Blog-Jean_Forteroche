<?php

session_start();
$errors = [];

if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas rénseigné votre nom";
}
if (!array_key_exists('firstName', $_POST) || $_POST['firstName'] == '') {
    $errors['firstName'] = "Vous n'avez pas rénseigné votre prénom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas rénseigné corectement votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas rénseigné votre message";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: ../../index.php#signup');
} else {
    $_SESSION['success'] = 111;
    $from = $_POST['email'];
    $to = 'pavelklimovich@hotmail.fr';
    $subject = 'Vérification PHP mail';
    $message = $_POST['message'];
    $headers = 'From:'.$from;
    mail($to, $subject, $message, $headers);
    header('Location: ../../index.php#signup');
}
