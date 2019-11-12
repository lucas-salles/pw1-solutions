<?php
    require_once('config.php');

    class UserDatabase {
        public function __construct() {
            $dsn = DB.":dbname=".DBNAME.";host=".DBHOST;
            try {
                $this->connection = new PDO($dsn, DBUSER, DBPWD);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        public function read($login) {
            $sql = "SELECT * FROM users WHERE login='${login}'";
            $pdoStm = $this->connection->query($sql);
            return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
        }
    }


?>