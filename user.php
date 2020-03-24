<html>
<head>
    <title>User Page</title>
</head>
<body>
<div id="welcome">
    Welcome User!
    <button onclick="
                    if(confirm('Are you sure you want to logout?')) {
                        window.location.href='login.php';
                    }
                    ">Logout</button>
</div>
<div id="features">
    <button href="checkout.php">Check Out</button>
    <button href="checkin.php">Check In</button>
    <button href="my_books.php">My books</button>
</div>
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
                        <td>.$i.</td>
                        <td>".$result['ID']."</td>
                        <td>".$result['book name']."</td>
                        <td>".$result['availability']."</td>
                    </tr>";
                $i++;
            }
        echo "</table>";
    }
?>
</body>
</html>