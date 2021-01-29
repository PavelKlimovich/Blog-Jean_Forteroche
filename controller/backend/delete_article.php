<?php

include_once '../../model/Post.php';
$dbb = new Post();

 if (!empty($_POST['id_delete'])) {
     $req = $dbb->Delete_Post($_POST['id_delete']);
     header('Location: ../../admin.php');
 }
