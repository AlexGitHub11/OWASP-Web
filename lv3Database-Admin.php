
<?php 

/*

if(!isset($_SESSION['Admin'])){
    header("location: lv3Database-Guest.php");
}

*/

?>

<!DOCTYPE html>


<html>

    <head>

        <title>OWASP-VulnPage.ac.uk/database</title>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="logo1.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<section class="content">
    <h1 class="title">Admin priviledge</h1>

<p>Welcome back Admin<p>

<body>


<section class="content">


    <table class="table1">
        <tr>
            <th><u>Staff-ID</u></th>
            <th><u>Staff-FirstName</u></th>
            <th><u>Staff-LastName</u></th>
            <th><u>Staff-Age</u></th>
            <th><u>Staff-Gender</u></th>
            <th><u>Staff-Position</u></th>
        </tr>

        <?php
      
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "arucsd_mysql";

        $conn = mysqli_connect($serverName, $userName, $password, $dbName);

        
        if(mysqli_connect_errno()){
            echo "Could not connect to databse!";
            exit();
        }
        echo "Connection to database successful!";

        
        $sql = "SELECT * From staff ";
        $result = $conn->query($sql);

    
        
        if ($result->num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["StaffID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Position"] . "</td></tr>";
            }   
        } 
        else {
            echo "No Results found!";
        }
        
        $conn -> close();
        ?>

        <table class="table1">
        <tr>
            <th><u>Student-ID</u></th>
            <th><u>Student-FirstName</u></th>
            <th><u>Student-LastName</u></th>
            <th><u>Student-Age</u></th>
            <th><u>Student-Gender</u></th>
            <th><u>Student-grade</u></th>
        </tr>

        <?php
        

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "arucsd_mysql";

        $conn = mysqli_connect($serverName, $userName, $password, $dbName);

        $sql1 = "SELECT * From students";
        $result1 = $conn->query($sql1);
        
        
        if ($result1->num_rows > 0) {
            while($row = $result1-> fetch_assoc()) {
                echo "<tr><td>" . $row["StudentID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["Lastname"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Currentgrade"] .  "</td></tr>";
            }   
        } 
        else {
            echo "No Results found!";
        }
        
        $conn -> close();

        ?>            

        </table> 

        <div class="container">
    <a href="lv3mitigations.php"><button class="btn">Continue</button></a>
</div>

<footer class="footer">
    <br>Can you make it to level 4
</footer>


    </body>


</html>