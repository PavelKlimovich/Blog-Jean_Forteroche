<?php

require './model/Post.php';
require './model/Comment.php';

function listPosts()
{
    if (isset($_GET['id']) && $_GET['id'] > 0 && $_GET['ht'] == 'post') {
        post();
    } else {
        $bdd = new Post();
        $posts = $bdd->getPosts();

        include_once './view/frontend/blogView.php';
    }
}

function connect()
{
    include_once './view/frontend/conectView.php';
}

function contact()
{
    include_once './core/class/Form.php';
    include_once './view/frontend/contactView.php';
}

function post()
{
    $bdd = new Post();
    $bbd = new Comment();
    $post = $bdd->getPost($_GET['id']);
    $comments = $bbd->getComments($_GET['id']);
    include_once './core/class/Form.php';
    include_once './view/frontend/billetsView.php';
}
