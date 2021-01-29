<?php

require_once 'BDD.php';

class Comment extends BddConnect
{
    public function getComments($postId)
    {
        $comments = $this->db->prepare('SELECT id, author, comment,ee, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getLastComments()
    {
        $comments = $this->db->query('SELECT id, author, comment,ee, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date DESC LIMIT 0, 5');

        return $comments;
    }

    public function getAllComments()
    {
        $comments = $this->db->query('SELECT id, author, comment,ee, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date ');

        return $comments;
    }

    public function S_Comment($ID)
    {
        $rr = '<div class=" alert alert-danger"> <p> Le commentaire a été signialé par utilisateur !</p></div>';
        $req = $this->db->prepare('UPDATE comments SET  ee = :mm   WHERE id = :id');
        $req->execute(array(
       'mm' => $rr,
       'id' => $ID,
       ));
    }

    public function Post_Comment($ID, $Auteur, $Contenu)
    {
        $req = $this->db->prepare('INSERT INTO comments (post_id, author, comment, ee, comment_date) VALUES(?, ?, ?, ?, ?)');
        $req->execute(array($ID, $Auteur, $Contenu, 0, (new DateTime('now', timezone_open('Europe/Paris')))->format('Y-m-d H:i:s')));
    }

    public function Delete_Comment($ID)
    {
        $req = $this->db->exec('DELETE FROM comments WHERE id = '.$ID.' ');
    }
}
