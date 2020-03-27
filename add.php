<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Add New books</title>
    </head>
    <body>
        <form action="add.php" method="POST">
            <label>Enter the name of the book:</label>
            <input type="text" name="newbook">
            <input type="submit" value="ADD">
        </form>
        <button onclick="location.href='admin.php'">Return to main page</button>
        <?php

            require "connection.php";

            if(isset($_POST["newbook"])) {
                
                $new=$_POST["newbook"];
                $sql=$conn->query("INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES (NULL, '$new', 'Available')");
                
                if($sql) {
                    echo "
                            <script>
                            alert('The book has been added');
                            location.href='admin.php';
                            </script>
                         ";
                }
            }
        ?>
    </body>
</html>