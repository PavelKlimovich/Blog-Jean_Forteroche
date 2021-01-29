<?php

session_start();

require './model/Post.php';
require './model/Comment.php';

if (!empty($_SESSION['connection'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'posts') {
            $bdd = new Post();
            $bbd = new Comment();
            $comments = $bbd->getAllComments();
            $posts = $bdd->getPosts();
            require './view/backend/PostsView.php';
        }

        if ($_GET['action'] == 'comments') {
            $bbd = new Comment();
            $bdd = new Post();
            $comments = $bbd->getAllComments();
            $posts = $bdd->getPosts();
            include_once './view/backend/commentView.php';
        }

        if ($_GET['action'] == 'update') {
            $bdd = new Post();
            $post = $bdd->getPost($_GET['id']);
            include_once './view/backend/UodatePostView.php';
        }
    } else {
        $bdd = new Post();
        $bbd = new Comment();
        $comments = $bbd->getAllComments();
        $posts = $bdd->getPosts();
        include_once './view/backend/adminView.php';
    }
} else {
    include_once './public/frontend/404.php';
}
