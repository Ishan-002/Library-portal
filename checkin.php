<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Check-in books</title>
    </head>
    <body>
        Please choose the books you want to check in:
        <?php

            require "connection.php";
            
            $sql=$conn->query("SELECT * FROM booklist WHERE availability='Unavailable' ");

            echo "
                    <form action='user.php' method='post'>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Choose</th>
                        </tr>
                ";

            $i=1;

            while($result=$sql->fetch_assoc()) {
                echo "
                        <tr>
                            <td>".$i."</td>
                            <td>".$result["book name"]."</td>
                            <td><input type='checkbox' value=".$result["ID"]." name='in$i'></td>   
                        </tr>
                    ";

                $i++;
            }
            echo "
                    </table>
                    <input type='submit' value='Request check-in'>";
                    echo"   </form>";
        ?>
    </body>
</html>