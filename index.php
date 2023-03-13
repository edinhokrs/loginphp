
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form"> 
        <h1>Login Form</h1>
        <br>
        <form name="form" method="POST"> 
            <label>Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"></br></br>
            <br><br>
            
                <form>
                <input type="submit" id="btn" value="Login" name="submit">
                </form></form>
                <br><br>
                <form action="register.php" method="POST">
                    <input type="submit" id="btn2" value="Sign up" name="signup">
                </form>

        
    </div>


    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $user = $dados['user'];
        $password = $dados['pass'];
        $submit = $dados['submit'];
        var_dump($dados);
        print"$user $password $submit";
        //Acredito que a próxima parte seja tentar inserir os cadastros no banco de dados;
        if ($dados['submit'] == "Login") {
            print("Clicou no Login");
        }
    ?>


</body>
</html>