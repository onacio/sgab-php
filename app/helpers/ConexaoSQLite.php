<?php

class ConexaoMySql {        
    private static $pdo;  

    public static function getConnection() {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO("sqlite:" . "banco.db");
                // Define o modo de erro do PDO para exceções
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }
        return self::$pdo;        
    }

    // Método para fechar a conexão
    public static function closeConnection() {
        self::$pdo = null;
    }
}
?>