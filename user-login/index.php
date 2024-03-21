<?php
session_start();
include("connection.php");
if(isset($_POST['Register'])){
    $username =$_POST['username'];
    $password =($_POST['password']);
    $password1 =($_POST['password1']);
    $hash=md5($password);
    if(($password != $password1)){
        echo"Password doesnot match";
    }
    
    else{
    $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$hash')";
    $result = mysqli_query($conn,$sql); 
    $_SESSION['logged_in']= true;
    $_SESSION['username'] = $username;
    $_SESSION['success']="You are now registered";
    // header("location:login.php");
    echo $_SESSION['success'];

    mysqli_close($conn);

}
}


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Register form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <section class="outer-part">
        <form class="login-form" action="" method="POST">
            <h3>Register</h3>
            <div class="fields">
                <input type="text" name="username" id="username" placeholder="username" required /><br />
                <input type="password" name="password" id="password" placeholder="password" required /><br />
                <input type="password" name="password1" id="password1" placeholder="confirm password" required /><br />
                <button type="Submit" name="Register" id="Register" />Register</button><br />
            </div>
            <a>Already a member?</a>
            <a href="login.php">Login </a>
        </form>
    </section>
</body>

</html>