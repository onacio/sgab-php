<?php
include('../helpers/ConexaoSQLite.php');

class LoginDAO{
    private $pdo;

    public function __construct()
    {
        $this->pdo = ConexaoMySql::getConnection();                
    }

    public function consultar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);

        $stmt->execute();
        return $stmt->fetch();
    }
}