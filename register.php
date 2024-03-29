
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
            <input type="password" id="pass" name="pass" ></br></br>
            <label> E-mail:</label>
            <input type="email" id="email" name="email"></br></br>
            <br><br>
            <input type="submit" id="btn3" value="Register" name="register">

        </form>
    </div>
    <?php
        require_once'./conection.php';

        $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/i";
        
        if (isset($_POST['register'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if (preg_match($pattern, $pass)) {
                $pass = $_POST['pass'];
            } else {
                echo'<script>
                alert("Invalid password! Password must have at least one character uppercase, one lower case and one special character.")
                </script>';
                die();
            }
            $email = $_POST['email'];
            
            $check_user_query = "SELECT * FROM users WHERE user = '$user' OR email = '$email'";
            $check_user_result = $conn->query($check_user_query);
            if ($check_user_result->num_rows > 0) {
                echo '<script>
                window.location.href = "./register.php"
                alert("Register failed. User or email already exists in database.")
                </script>';
            } else {
                $insert_user_query = "INSERT INTO users (id, user, password, email) VALUES (null, '$user', '$pass', '$email')";
                if ($conn-> query($insert_user_query) === TRUE) {
                    echo "<script>
                    alert('Registered!')
                    </script> ";
                } else {
                    echo "<script>
                    alert(There's something wrong)
                    </script> " . $conn->error;
                }
            }
        }  
    ?>
</body>
</html>