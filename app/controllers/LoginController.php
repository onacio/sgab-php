<?php
//include('../helpers/ConexaoSQLite.php');
include('../DAO/LoginDAO.php');

class LoginController{ 
    //private $pdo;

    // function __construct()
    // {
    //     $this->pdo = ConexaoMySql::getConnection();
    // }
    
    public function login($e, $s){        
        $email = addslashes($e);
        $senha = addslashes($s);

        $dao = new LoginDAO();
        $dados = $dao->consultar($email, $senha);

        session_start();
        $_SESSION['usuario'] = $dados['usuario'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['unidade'] = $dados['unidade'];
        $_SESSION['tipo_acesso'] = $dados['tipo_acesso'];
        
        header('Location:home.php');
    } 
    
    public function logout(){
        unset($_SESSION['usuario']);
        unset($_SESSION['nome']);
        unset($_SESSION['unidade']);
        unset($_SESSION['tipo_acesso']);
    }
}