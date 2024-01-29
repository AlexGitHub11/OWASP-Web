
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

    <body>
    

    <section class="content">
        <h1 class="title">Register here </h1>


        <div class="login">

            
        <form method ="POST" action="registerconnect.php" >

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
                            value="Register">
                        </td>
                        <td>
                            Already a user: <a href="lv3brokenaccesscontrol.php">log in here!</a>

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