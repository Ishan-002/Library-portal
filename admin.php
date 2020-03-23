<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        <div>
            Welcome Admin!!
            <button onclick="
            if(confirm('Are you sure you want to logout?')) {
                location.href='login.php';
            }
            ">Logout</button>        
        </div>
        <div id="features">
            <button href="add.php">Add new books</button>
            <button href="remove.php">Remove books</button>
            <button href="modify.php">Modify existing entries</button>
            <button href="requests.php">Check for requests</button>
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
                                    <td>".$result['ID']."</td>
                                    <td>".$result['book name']."</td>
                                    <td>".$result['availability']."</td>
                                </tr>";
                        $i++;
                        }
                    echo "</table>";
                



                //php for modifying the table entries submitted at modify.php
                
                if( isset($_POST["1"])) {
                    $i=1;
                    foreach( $_POST as $index => $value) {

                        if( $index == "id$i") {
                            $idchange=$conn->query("UPDATE booklist SET ID=$value WHERE $index='$i'");
                        }
                        if( $index == "bname$i") {
                            $idchange=$conn->query("UPDATE booklist SET `book name`='$value' WHERE $index='$i'");
                        }
                        if( $index == "avail$i") {
                            $idchange=$conn->query("UPDATE booklist SET availability='$value' WHERE $index='$i'");
                        }
                        $i++;
                    }
                }
                    
                        
                    
                

                }
            ?>
        </div>
    </body>
</html>