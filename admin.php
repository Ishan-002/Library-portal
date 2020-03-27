<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Admin Page</title>
    </head>
    <body>
        <div id="welcome">
            Welcome Admin!!
            <button onclick="
            if(confirm('Are you sure you want to logout?')) {
                location.href='login.php';
            }
            " class="logout">Logout</button>        
        </div>
            <button onclick='location.href="add.php";'>Add new books</button> 
            <button onclick='location.href="remove.php"'>Remove books</button>     
            <!-- <button onclick='location.href="modify.php"'>Modify existing entries</button>  -->
            <button onclick='location.href="requests.php"'>Check for requests</button>    
        <div class='full-table'>
            The complete book list:
           <?php
                require "connection.php";
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
                

                
                //this part is not working
                // php for modifying the table entries submitted at modify.php
                
                // if( isset($_POST["bname1"])) {
                //     $i=1;
                //     foreach( $_POST as $index => $value) {
                //         // $idchange=$conn->query("UPDATE booklist SET ID=int($value)");
                //         if($index == "bname$i") {
                //             $k=$_POST["id$i"];
                //             $idchange=$conn->query("UPDATE booklist SET `book name`='$value' WHERE ID=int($a) ");
                //         }
                //         if($index == "avail$i") {
                //             $k=$_POST["id$i"];
                //             $idchange=$conn->query("UPDATE booklist SET `availability`='$value' WHERE ID=int($a) ");
                //         }
                //         $i++;
                //     }
                //  }
            ?>
        </div>
    </body>
</html>