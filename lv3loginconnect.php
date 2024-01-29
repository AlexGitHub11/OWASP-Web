
<!DOCTYPE html>

<html>

    <head>

        <title>OWASP-VulnPage.ac.uk/login</title>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="logo1.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

    </nav>

<body>
    

    <section class="content">
        <h1 class="title"></h1>
        <div class="login">

    
    <br>
    <br>

<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "login";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);


$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $conn->prepare(" SELECT * FROM users WHERE Username = ? AND Password = ?"); 
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$queryresult = $stmt->get_result();

if($queryresult && mysqli_num_rows($queryresult) > 0) {

    $data = mysqli_fetch_assoc($queryresult);
    
    header("Location: lv3Database-Guest.php");
    die;

}   else{
    echo "Invalid username or password";
    
}

?>

<div class="container">
    <a href="lv3brokenaccesscontrol.php"><button class="btn">Return to login page</button></a>
</div>

<footer class="footer">
    <br>Can you make it to level 4
</footer>


    </body>


</html>