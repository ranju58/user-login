<?php
$login=false;
include("connection.php");
if(isset($_POST['Login'])){
    $username =$_POST['username'];
    $password =($_POST['password']);
    // $password = md5($password);
    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num ==1){
     while($row = mysqli_fetch_array($result)){
        if(password_verify($password,$row['password'])){
    $login=true;
    $_SESSION['logged_in']= true;
    $_SESSION['success']="You are now logged in";
    $_SESSION['username']= $username;
     header("location:home.php");
   }
}
    }
   else{
    echo"Invalid Credentials";
   }
// }
    // }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Login form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <section class="outer-part">
        <form class="login-form" action="" method="POST">
            <h3>LOGIN</h3>
            <div class="fields">
                <input type="text" name="username" id="username" placeholder="Username" /><br />
                <input type="password" name="password" id="password" placeholder="Password" /><br />
                <input type="text" name="forgot" id="forgot" placeholder="Forgot password?" /><br />
            </div>

            <button type="Submit" name="Login" id="Login" />Login</button><br />

            <a>Not a member?</a>
            <a href="index.php">Signup </a>
        </form>
    </section>
</body>

</html>