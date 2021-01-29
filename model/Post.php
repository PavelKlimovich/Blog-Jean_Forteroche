<?php

require_once 'BDD.php';

class Post extends BddConnect
{
    public function Delete_Post($ID)
    {
        $req = $this->db->prepare('DELETE FROM posts WHERE id = ? ');
        $req->execute(array($ID));
    }

    public function getPosts()
    {
        $req = $this->db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $req = $this->db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function Post_Article($Title, $Texte)
    {
        $req = $this->db->prepare('INSERT INTO `posts`( `id`, `title`, `content`, `creation_date`) VALUES(?, ?, ?, ?)');
        $req->execute(array(null, $Title, $Texte,  (new DateTime('now', timezone_open('Europe/Paris')))->format('Y-m-d H:i:s')));
    }

    public function Update_Post($Titre, $Texte, $ID)
    {
        $req = $this->db->prepare('UPDATE posts SET title = :title, content= :content , creation_date =NOW()  WHERE id = :id');
        $req->execute(array(
        'title' => $Titre,
        'content' => $Texte,
        'id' => $ID,
        ));
    }
}
