<html>
    <head>
        <title>Add New books</title>
    </head>
    <body>
        <form action="add.php" method="POST">
            <label>Enter the name of the book:</label>
            <input type="text" name="newbook">
            <input type="submit" value="ADD">
        </form>
        <?php
            $dbuser="ishu";
            $dbpass="Ishan_002";
            $dbhost="localhost";
            $db="books";
        
            $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
        
            if($conn->connect_errno) {
                die("connnection unsuccesful");
            }
        
            else {
                if(isset($_POST["newbook"])) {
                $new=$_POST["newbook"];
                $sql=$conn->query("INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES (NULL, '$new', 'Available')");
                if($sql) {
                    echo("done!!");
                }
                }
            }
        ?>
    </body>
</html>