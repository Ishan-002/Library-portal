<html>
    <head>
        <title>Check-in books</title>
    </head>
    <body>
    Please choose the books you want to check in:
    <?php
        $dbhost="localhost";
        $dbuser="ishu";
        $dbpass="Ishan_002";
        $db="books";

        $conn= new mysqli($dbhost,$dbuser,$dbpass,$db);
        
        $sql=$conn->query("SELECT * FROM booklist WHERE availability='Unavailable' ");

        echo "
                <form action='' method='post'>
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
                        <td><input type='checkbox' value='' name=''></td>
                    </tr>
                 ";

            $i++;
        }
        echo "
                </table>
                <input type='submit' value='Request check-in' onclick='poo()'>
                </form>
             ";
    ?>
    <script>
        function poo() {
            alert("Your request has been sent for approval");
            window.location.href="user.php";
        }
    </script>
    </body>
</html>