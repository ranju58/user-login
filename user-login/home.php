<?php
session_start();
if(!isset($_SESSION['username'])){
// header("location:login.php");
// echo "Welcome". $_SESSION['username']."<br/>";
}
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>My test page</title>
    <link rel="stylesheet" href="demo.css">
</head>

<body>
    <header class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <h1>This is my demo page</h1>
    <h2>Welcome! <?php echo $_SESSION['username'];?></h2>
</body>

</html>