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
            <button onclick='location.href="add.php";'>Add new books</button>     <!-- inside onclick semicolon -->
            <button onclick='location.href="remove.php"'>Remove books</button>    <!-- is not compulsory, we --> 
            <button onclick='location.href="modify.php"'>Modify existing entries</button> <!-- can directly write JS -->
            <button onclick='location.href="requests.php"'>Check for requests</button>    
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
                



                // //php for modifying the table entries submitted at modify.php
                
                if( isset($_POST["bname1"])) {
                    $i=1;
                    foreach( $_POST as $index => $value) {
                        // $idchange=$conn->query("UPDATE booklist SET ID=int($value)");
                        if($index == "bname$i") {
                            $k=$_POST["id$i"];
                            $idchange=$conn->query("UPDATE booklist SET `book name`='$value' WHERE ID=int($a) ");
                        }
                        if($index == "avail$i") {
                            $k=$_POST["id$i"];
                            $idchange=$conn->query("UPDATE booklist SET `availability`='$value' WHERE ID=int($a) ");
                        }
                        $i++;
                    }
                 }
                    
                        
                    
                

                }
            ?>
        </div>
    </body>
</html>