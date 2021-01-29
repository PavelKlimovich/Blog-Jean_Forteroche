<?php

require_once 'BDD.php';

class Connect extends BddConnect
{
    public $errors = [];

    public function Select()
    {
        $reponse = $this->db->query('SELECT * FROM admin');

        return $reponse;
    }

    public function Connection($password, $mail)
    {
        $rr = $this->Select();
        while ($donnees = $rr->fetch()) {
            session_start();

            if (password_verify($password, $donnees['password']) && $donnees['email'] == $mail) {
                $_SESSION['connection'] = 101;
                header('Location: ../../admin.php');
            } else {
                $this->errors['conection_errors'] = "Vous n'avez pas corectement rénseigné vos données ";
                $_SESSION['errors'] = $this->errors;
                header('Location: ../../index.php?action=connect');
            }
        }
    }
}
