<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Editor</title>
        <style>
            form{
                font-size:5vw;
            }
        </style>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST") {
                $cn=new mysqli('localhost','root','','AJAX') or die("Connection failed");
                $uname=$_POST['uname'];
                $cn->query("update sample set name='$uname'");
                echo $cn->error;
            }
        ?>
    </head>
    <body>
        <br><br>
        <form method="POST" action="dbupdate.php">
            <label for="uname">Enter your name:</label>
            <input type="text" name="uname" id="uname" required>
            <input type="Submit">
        </form>
    </body>
</html>