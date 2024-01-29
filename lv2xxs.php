
<!DOCTYPE html>

<html>

    <head>

        <title>OWASP-VulnPage.ac.uk/forum</title>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="logo1.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<body>
    

    <section class="content">
        <h1 class="title">Level 2: XSS </h1>

        <p>XSS attacks gained the number seven spot on the OWASP top 10 in 2017.<br> This level tests your ability to take advantage of XXS reflective attacks to cause a redirection.<p>

<div class="commentbox">
    <h2>How great is XSS</h2>
    <form>
        <textarea id="txt" placeholder="Add comment"></textarea>
        <div class="btn2">
            <input type="button" id="buttn" value="Comment">
        </div>
    </form>
</div>

<div class="heading"> 
    <h2>Comments:</h2>
</div>  


<div class="commentoutputbox" id="output"> 
    <p><br><br><br><br><br><br><br><br><br><br><br><br>&lt;script&gt;&lt;img title=“&lt;/script&gt;&lt;img src onerror=window.location.href="http://localhost/WebApp/lv2mitigations.php"&gt;”&gt;&lt;/script&gt;</p>


<script>
    const txtbox = document.getElementById('txt');
    const button = document.getElementById('buttn');
    const output = document.getElementById('output');

    function getoutput(){
        output.innerHTML = txtbox.value;

        // output.innertext = txtbox.value; Prevents XSS by sanitizing all data as text and not executing and HTML or JS

    }

    button.addEventListener('click', getoutput);


</script>




<footer class="footer">
    <br>Can you make it to level 4
</footer>


    </body>


</html>