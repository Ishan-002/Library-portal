<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Check Out Books</title>
    </head>
    <body>
        The available books are:<br>
        
        <?php

            require "connection.php";

            $sql=$conn->query("SELECT * FROM booklist WHERE availability='Available'");
            echo "
                    <form action='user.php' method='post'>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Availability</th>
                            <th>Choose</th>
                        </tr>
                ";

            $i=1;

            while($result=$sql->fetch_assoc()) {
                echo "
                        <tr>
                            <td>".$i."</td>
                            <td>".$result["book name"]."</td>
                            <td>".$result["availability"]."</td>
                            <td><input type='checkbox' name='' value=".$result['ID']."></td>
                        </tr>
                        ";

                $i++;
            }
            echo " 
                    </table>
                    <input type='submit' value='Request check-out'>
                    </form>
                    ";
        ?>
    </body>
</html>