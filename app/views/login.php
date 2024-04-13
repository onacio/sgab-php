<?php 
    include('../controllers/LoginController.php');

    if(isset($_POST['email']) && isset($_POST['senha'])){        
        if(strlen($_POST['email']) == 0){
            echo 'O usuario deve se preenchido';            
        }else if(strlen($_POST['senha']) == 0){
            echo 'A senha deve se preenchido';            
        }else{
            try {
                $login = new LoginController();
                $login->login($_POST['email'], $_POST['senha']);
                //header('Location:home.php');
            } catch (Exception $th) {
                echo 'erro ao redirecionar a página';
            }
            
        }
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form class="form" action="" method="post">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="../img/user_128.png" alt="">
                <h2>Acesso ao Sistema</h2>
                <p>Seja bem-vindo</p>
            </div> 
            
            <div class="card-group">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" require>
            </div>   
            
            <div class="card-group">
                <label for="">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" require>
            </div> 
            
            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>                
            </div>    
            
            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
            </div>
        </div>

        <!-- <label for="">Usuário</label><br>
        <input type="text" name="usuario"><br><br>
        <label for="">Senha</label><br>
        <input type="password" name="senha"><br><br>
        <button type="submit">Entrar</button> -->
    </form>
</body>
</html>