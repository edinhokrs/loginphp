
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

    
        require_once'./conection.php';    
        if(isset($_POST['submit'])) {
            $user = $_POST['user'];
            $password = $_POST['pass'];
            $stmt = $pdo->prepare("select * from users where user = :user and password = :password");
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $row = $stmt->rowCount();
               
            
            if ($row > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                header("Location: ./welcome.php");
            } else {
                echo '<script>
                window.location.href = "./index.php"
                alert("Login failed. Invalid username or password")
                </script>';
            }
        }


    ?>


</body>
</html>