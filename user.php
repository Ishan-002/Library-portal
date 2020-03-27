<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>User Page</title>
    </head>
    <body>
        <div id="welcome">
            Welcome User!
            <button onclick="
                            if(confirm('Are you sure you want to logout?')) {
                                window.location.href='login.php';
                            }
                            " class="logout">Logout</button>
        </div>
            <button onclick='location.href="checkout.php"'>Check Out</button>
            <button onclick='location.href="checkin.php"'>Check In</button>
            <button onclick='location.href="my_books.php"'>My books</button>
        <div class="full-table">
            The full list of books is:
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
                            <td>$i</td>
                            <td>".$result['ID']."</td>
                            <td>".$result['book name']."</td>
                            <td>".$result['availability']."</td>
                        </tr>";
                $i++;
            }
            echo "</table>";


            // for check in and check out

            foreach($_POST as $index => $value) {
                if( strpos($index,"in") !== false) {
                    
                    $req=$conn->query("INSERT INTO inrequests VALUES (NULL,int($value))");
                }
                if( strpos($index,"out") !== false) {
                    
                    $req=$conn->query("INSERT INTO outrequests VALUES (NULL,int($value))");
                }
                
            }
        ?>
        </div>
    </body>
</html>