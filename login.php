<html>
    <head>
        <title> Login Portal </title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form action="login.php" method="post">
            <legend id="login">Login Portal</legend>
            Username: 
            <input type="text" name="username"><br>
            Password: 
            <input type="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>
        <p id="galti"></p>

        <?php        
            
            $user=$_POST["username"];
            $pass=$_POST["password"];
            
            if(isset($_POST["password"])) {
                if($pass == "baccha"  &&  $user == "user") {
                    echo('<script>location.href="user.php"</script>');
                }
                elseif ($pass == "baap"  &&  $user == "admin" ) {
                    echo('<script>location.href="admin.php"</script>');
                }
                else {
                    echo('<script>document.getElementById("galti").innerHTML="Try Again!!";</script>');
                }
            }
        ?>
</body>
</html>

        