<html>
    <head>
        <title>Check Out Books</title>
    </head>
    <body>
        The available books are:<br>
        
        <?php

            require "connection.php";

            $sql=$conn->query("SELECT * FROM booklist WHERE availability='Available'");
            echo "
                    <form action='' method='post'>
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
                            <td><input type='checkbox' name='' value=''></td>
                        </tr>
                        ";

                $i++;
            }
            echo " 
                    </table>
                    <input type='submit' value='Request check-out' onclick='poo()'>
                    </form>
                    ";
        ?>
        <!-- <script>
            function poo() {
                alert("Your request has been sent for approval");
                window.location.href="user.php"; //this is doubtful ki page agar yahan chala gya toh form data
                                                //sahi jagah jaega ki nahi
            } -->
        <!-- </script>  -->
    </body>
</html>