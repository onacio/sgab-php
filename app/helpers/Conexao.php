<?php

class ConexaoSQLite {
    private $pdo;    

    public function __construct() {
        try {
            $this->pdo = new PDO("sqlite:" . "banco.db");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            die();
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

    public function closeConnection() {
        $this->pdo = null;
    }
}

?>
