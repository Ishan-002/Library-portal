<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Remove books</title>
    </head>
    <body>
        <div>
            Select the book(s) you want to remove:
            <?php
                
                require "connection.php";
                
                $sql=$conn->query("SELECT * FROM booklist WHERE availability = 'Available' ");
                echo "
                    <form method='POST' action='remove.php'>
                    <table>
                        <tr>
                            <th>S.No</th>
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
                            <td>".$result['ID']."</td>
                            <td>".$result['book name']."</td>
                            <td>".$result['availability']."</td>
                            <td><input type='checkbox' name=".$i." value=".$result['ID'].">
                        </tr>";
                    $i++;
                }
                echo "</table><input type='submit' value='Delete the following books'></form>";
                foreach($_POST as $value)
                {
                    $sql1=$conn->query("DELETE FROM `booklist` WHERE `booklist`.`ID` = $value ");
                }
                if($sql1){
                    echo " 
                        <script>
                        alert('Books deleted successfully');
                        location.href='admin.php';
                        </script> ";
                }
            ?>

        </div>
    </body>
</html>