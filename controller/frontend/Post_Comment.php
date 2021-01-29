<?php

include_once '../../model/Comment.php';

$dbb = new Comment();
 if (!empty($_POST['auteur']) && !empty($_POST['contenu']) && !empty($_POST['id'])) {
     $req = $dbb->Post_Comment($_POST['id'],$_POST['auteur'],$_POST['contenu']);
     header('Location: ../../index.php?action=blog&ht=post&id='.$_POST['id']);
 } else {
     header('Location: ../../index.php?action=blog&ht=post&id='.$_POST['id']);
 }
