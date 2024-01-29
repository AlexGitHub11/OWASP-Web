
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

<section class="content">
    <h1 class="title">Level 3: Broken Access Control</h1>

    <p>Broken Access Control attacks gained the fith spot on the OWASP fith spot in 2017.<br> This level tests your ability to take advantage of a broken access system to escalate priviledge<p>

    <div class="login">

            <form method="POST" action="lv3loginconnect.php" >

            <table>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit"
                            value="Login">
                        </td>
                        <td>
                            Join today: <a href="register.php">Register here!</a>

                        </td>

                    </tr>
                    
                </table>


                
            </form>

        </div>




<footer class="footer">
    <br>Can you make it to level 4
</footer>


    </body>


</html>