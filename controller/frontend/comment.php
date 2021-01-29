<?php

session_start();
include_once '../../model/Comment.php';

$dbb = new Comment();

 $_SESSION['ss'] = 11;
 if (!empty($_POST['id'])) {
     $dbb->S_Comment($_POST['id']);

     header('Location: ../../index.php?action=blog&ht=post&id='.$_POST['id_get']);
 }
