
<!DOCTYPE html>


<html>

    <head>

        <title>OWASP-VulnPage.ac.uk/register</title>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="logo1.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<?php


$username = $_POST['username'];
$password = $_POST['password'];


if (!empty($username)){
    if (!empty($password)) {
        $serverName = "localhost";
        $dbuserName = "root";
        $dbpassword = "";
        $dbName = "login";

         
        $conn = mysqli_connect($serverName, $dbuserName, $dbpassword, $dbName);
        
        
        if(mysqli_connect_error()){
            die('Could not connect to database ('.
                mysqli_connect_errno().')' .
                mysqli_connect_error());       
        }
        
        else {
            $sql = "INSERT INTO users (Username, Password) values ('$username', '$password')";
            if (mysqli_query($conn, $sql)){
                echo "New user has been registered successfuly! ";
            }
            
            else{
                echo "" . mysqli_error($conn);
            }
            $conn->close();
        }
    }
    else {
        echo "password filed required.";
        die();
    }
}
else {
    echo "Username filed required";
    die();
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