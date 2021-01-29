<?php

class BddConnect
{
    private $type = 'mysql';
    private $host = 'localhost';
    private $port = 8889;
    private $dbname = 'projet4';
    private $username = 'root';
    private $password = '';
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                $this->type.':host='.$this->host.';dbname='.$this->dbname,
                $this->username,
                $this->password
            );
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
}
