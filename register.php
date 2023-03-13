
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <div id="form2">
        <h1>Register</h1>
        <br>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password:</label> 
            <input type="password" id="pass" name="pass"></br></br>
            <label> E-mail:</label>
            <input type="email" id="email" name="email"></br></br>
            <br><br>
            <input type="submit" id="btn3" value="Register" name="register">

        </form>
    </div>
    <?php
        require_once'./conexao.php';
        
        if (isset($_POST['register'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $sql = "INSERT INTO user (id, user, password, email) VALUES (null, '$user', '$pass', '$email')";
            if (empty($_POST['user']) OR empty($_POST['pass'])) {
                echo"Não deu";
                die();
            } 
        }
            
        if ($conexao->query($sql) === TRUE ) {
            echo 'Cadastro inserido com sucesso! ';
        } else {
            echo"Erro ao inserir" . $conexao->error;
        }  
    ?>
</body>
</html>