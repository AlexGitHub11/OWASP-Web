
<!DOCTYPE html>

<html>

    <head>

        <title>OWASP-VulnPage.ac.uk/mitigations</title>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="logo1.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<section class="content">
    <h1 class="title">SQL Injection Mitigation</h1>

<p>Seen below on the left is a image of the code you have just exploited to bypass the login function authentication.<br> On the right is the secure version of this code to prevent SQL Injection authentication bypass, <br> As can be seen, a prepared statement has been implimented to prevent SQL querys being executed in the input fields. <br> This is achived by implimenting a prepared statement which seperates the SQL query from any inputed data from the user. <p>


<div class="container">
    <a href="lv2xxs.php"><button class="btn">Continue to Level 2</button></a>
</div>

<img src="sql-vuln-img.png" alt="vuln" class="xssvuln">

<img src="sql-secure-img.png" alt="secure" class="xsssecure">


<footer class="footer">
    <br>Can you make it to level 4
</footer>


    </body>


</html>