<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        <title>Pending Requests</title>
    </head>
    <body>
        These are the following requests: <br> 
        <?php
                
            require "connection.php" ;
                    
            $i=1;
            $sql=$conn->query("SELECT ID FROM inrequests ");
            echo "<h2>Check-in</h2>";
            while($result=$sql->fetch_assoc()) {
                echo "
                        <div>The user has requested to checkin the book with ID: $result <br>
                        <button onclick='acceptin($result)'> Accept</button>
                        <button onclick='declinein($result)'> Decline</button>
                        </div>
                ";
            }

            $sqlout=$conn->query("SELECT ID FROM outrequests ");
            echo "<h2>Check-out</h2>";
            while($result=$sql->fetch_assoc()) {
                echo "
                        <div>The user has requested to checkout the book with ID: $result <br>
                        <button onclick='acceptout($result)'> Accept</button>
                        <button onclick='declinout($result)'> Decline</button>
                        </div>
                ";
            }

            echo "
                    <script>
                    function acceptin(v) {
                        $.ajax(
                            url: 'requestprocessing.php',
                            type: 'POST,
                            data: { 'avial': 'Available' , 'idin': v },
                            success: close()
                        );
                    }

                    function acceptout(v) {
                        $.ajax(
                            url: 'requestprocessing.php',
                            type: 'POST,
                            data: { 'avial': 'Unavailable' , 'idout': v },
                            success: close()
                        );
                    }
                    function declinein(v) {
                        $.ajax(
                            url: 'requestprocessing.php',
                            type: 'POST,
                            data: { 'idinrejected': v },
                            success: close()
                        );
                    }function declineout(v) {
                        $.ajax(
                            url: 'requestprocessing.php',
                            type: 'POST,
                            data: { 'idoutrejected': v },
                            success: close()
                        );
                    }
                    function close() {
                        
                    }

                    </script>
                ";            
        ?>
    </body>
</html>