<html>
    <head>
        <title>Pending Requests</title>
    </head>
    <body>
        These are the following requests: <br> 
        Check In:
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
                    
                    $i=1;
                foreach($_POST  as  $index => $value) {
                    
                    if( strpos($index,"in") !== false) {
                        
                        echo "<div> The user has requested to check-in the book with the ID: $value <br>
                            <form action='requests.php' method='POST'>
                            <button onclick='done()'>Accept</button>
                            <button onclick='close()'>Decline</button>
                            </form>
                            </div>
                            <script>
                            function done() {
                                ";$sql=$conn->query('UPDATE booklist SET `availability`=`Available` WHERE ID=`$value` ');echo "
                                close();
                            }
                            function close() {
                            }
                            function donec() {
                                ";$sql=$conn->query('UPDATE booklist SET `availability`=`Unavailable` WHERE ID=`$value` ');echo "
                                closec();
                            }
                            function closec() {
                            }
                            </script>
                    
                    
                        ";
                        

                    }
                    if( strpos($index,"out") !== false) {
                        
                        echo "<div> The user has requested to check-out the book with the ID: $value <br>
                            <button onclick='donec()'>Accept</button>
                            <button onclick='closec()'>Decline</button>
                            </div>
                    
                        ";
                //     if($index == "in") {
                //     echo "
                //             <div>The user has requested to check-in the book with the ID:<br>

                //         ";
            
                //     echo "
                //             <div>The user has requested to check-in the book: <br>

                //         ";
                // }
            }
        }
        }
        

        ?>

        
    </body>
</html>