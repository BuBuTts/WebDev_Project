<?php

    session_start();
    include("../loginpage/connection.php");
    include("../loginpage/functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){

        //something post
        $email = $_POST['email'];
        //$f_name = $_POST['f_name'];
        //$l_name = $_POST['l_name'];
        //$phone_number = $_POST['phone_number'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)){

            //read from db
            $query = "select * from user where email = '$email' limit 1";
            $result= mysqli_query($con,$query);

            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    $_SESSION['email'] = $user_data['email'];
                    header("location: ../homepage/homepage.php");
                    die;
                }
            }

            echo "Wrong email or password";
        }else{
            echo "Wrong email or password";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="loginStyle.css">
    <script src="loginscript.js"></script>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="email"  id="email" required name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" id="password" required name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me <a href="#">Forgot password</a></label>
                        
                    </div>
                    <button id="loginButton">Login</button>
                    <div class="register">
                        <p>Don't have an account <a href="../registerpage/registerpage.php"> Register here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>