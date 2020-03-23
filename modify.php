<html>
    <head>
        <title>
            Modify entries
        </title>
    </head>
    <body>
        Please change the entries as per the requirement and hit modify:
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
                            <form action='admin.php' method='POST'>
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
                                    <td>$i</td>
                                    <td><input type='text' placeholder=".$result["ID"]." value=".$result["ID"]." name='id$i'></td>
                                    <td><input type='text' placeholder=".$result["book name"]." value=".$result["book name"]." name='bname$i'></td>
                                    <td><select name='avail$i'><option selected disabled>".$result["availability"]."</option><option>Available</option><option>Unavailable</option></select></td>
                                </tr>";
                                $i++;
                        }
                    echo "</table><input type='submit' value='Modify'></form>";
                }
            ?>
        
    </body>
</html>