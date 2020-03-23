<html>
    <head>
        <title>Remove books</title>
    </head>
    <body>
        <div>
            Select the book(s) you want to remove:
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
                    $sql=$conn->query("SELECT * FROM booklist WHERE availability = 'Available' ");
                    echo "
                        <form method='POST' action='remove.php'>
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
                           <td>".$result['book name']."</td>
                           <td>".$result['availability']."</td>
                           <td><input type='checkbox' name=".$i." value=".$result['ID'].">
                       </tr>";
                       $i++;
                   }
                   echo "</table><input type='submit' value='Delete the following books'></form>";
                    }
                // if(isset($_POST))     Iss line ka koi matlab nahi hai...$_POST hamesha hi ek array hai toh 
                //                        NULL obviously nahi hoga
                    foreach($_POST as $value)
                    {
                        $sql1=$conn->query("DELETE FROM `booklist` WHERE `booklist`.`ID` = $value ");
                    }
                    // $sql2=$conn->query("ALTER TABLE `booklist` AUTO_INCREMENT = 10");
                    if($sql1){
                            echo " 
                                <script>
                                alert('Books deleted successfully');
                                location.href='admin.php';
                                </script> ";
                    }


            ?>
            <!-- <script>
                function foo() {
                    location.href="admin.php";
                }
            </script> -->

        </div>
    </body>
</html>