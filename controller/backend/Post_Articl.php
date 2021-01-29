<?php

include_once '../../model/Post.php';
$dbb = new Post();

 if (!empty($_POST['mytextarea']) && !empty($_POST['titre'])) {
     $req = $dbb->Post_Article($_POST['titre'],$_POST['mytextarea']);
     header('Location: ../../admin.php');
 }
 