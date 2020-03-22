<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        <div>
            Welcome Admin!!
            <button onclick="
            if(confirm('Are you sure you want to logout?')) {
                window.location.href='login.php';
            }
            ">Logout</button>        
        </div>
        <div id="features">
            <button href="">Add new books</button>
            <button href="">Remove books</button>
            <button href="">Modify existing entries</button>
            <button href="">Check for requests</button>
        </div>
        <div>
            The complete book list:
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
                    $sql=$conn->query("SELECT * FROM booklist ");
                    echo "
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Book Name</th>
                                    <th>Availability</th>
                                </tr>
                        ";
                        while($result=$sql->fetch_assoc()) {
                        echo "
                                <tr>
                                    <td>".$result['ID']."</td>
                                    <td>".$result['book name']."</td>
                                    <td>".$result['availability']."</td>
                                </tr>";
                        }
                    echo "</table>";
                }
            ?>
        </div>
    </body>
</html>