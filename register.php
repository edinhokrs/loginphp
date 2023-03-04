<?php

include_once'./funcoes.php';

?>

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
        <form name="form2" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password:</label> 
            <input type="text" id="pass" name="pass"></br></br>
            <label> E-mail:</label>
            <input type="text" id="email" name="email"></br></br>
            <br><br>
            <input type="submit" id="btn3" value="Register" name="register">

        </form>
    </div>
    <?php 
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados)
    ?>
</body>
</html>