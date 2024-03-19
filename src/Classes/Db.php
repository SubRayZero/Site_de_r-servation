<?php

require_once __DIR__ . "/../config.php";

class Db
{

    private $db;

    public function __construct()
    {

        try {
            $this->db = new PDO(
                'mysql:host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME . ';charset=utf8',
                DATABASE_USERNAME,
                DATABASE_PASSWORD
            );
        } catch (Exception $error) {

            die('Erreur : ' . $error->getMessage());
        }
    }

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */ 
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }
}
