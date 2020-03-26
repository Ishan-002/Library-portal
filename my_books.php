<html>
    <head>
        <title>My books</title>
    </head>
    <body>
        <?php
            
            require "connection.php";
            
            $sql=$conn->query("SELECT * FROM booklist WHERE availability = 'Unavailable' ");
            echo "
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Availability</th>
                    </tr>
                ";
            $i=1;
            while($result=$sql->fetch_assoc()) {
                echo "
                    <tr>
                        <td>".$i."</td>
                        <td>".$result["ID"]."</td>
                        <td>".$result['book name']."</td>
                        <td>".$result['availability']."</td>
                    </tr>";
                $i++;
            }
            echo "</table>";
        ?>

        <button href="user.php">Return to main page</button>

    </body>
</html>