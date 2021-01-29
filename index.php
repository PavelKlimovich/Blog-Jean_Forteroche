<?php

session_start();

include_once 'controller/frontend/Controller_Router.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'blog') {
        listPosts();
    }

    if ($_GET['action'] == 'contact') {
        contact();
    }

    if ($_GET['action'] == 'connect') {
        connect();
    }
} else {
    require './core/class/Form.php';
    include_once 'view/frontend/indexView.php';
}

unset($_SESSION['errors']);

unset($_SESSION['success']);
unset($_SESSION['ss']);
