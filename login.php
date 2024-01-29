
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
        <h1 class="title">Level 1: SQL Injection </h1>

        <p>Injection attacks gained the top spot on the OWASP top 10 in 2017.<br> This level tests your ability to take advantage of SQL querys in order to bypass the login auhtentication<p>
        <! ' OR 1 = 1 -- is the injection you are searching for! >
        
        <div class="login">

            <form method="POST" action="lv1sqlinjection" >

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