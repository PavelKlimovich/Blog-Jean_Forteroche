<?php

include_once '../../model/Post.php';
$dbb = new Post();

 if (!empty($_POST['mytextarea']) && !empty($_POST['titre'])) {
     $req = $dbb->Update_Post($_POST['titre'],$_POST['mytextarea'],$_POST['id']);
     header('Location: ../../admin.php');
 }
