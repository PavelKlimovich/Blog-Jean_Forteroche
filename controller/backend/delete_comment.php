<?php

include_once '../../model/Comment.php';
$dbb = new Comment();

 if (!empty($_POST['id_delete'])) {
     $req = $dbb->Delete_Comment($_POST['id_delete']);
     header('Location: ../../admin.php');
 }
