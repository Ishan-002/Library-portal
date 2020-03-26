<html>
    <head>
        <title>
            Modify entries
        </title>
    </head>
    <body>
        Please change the entries as per the requirement and hit modify:
        <?php
        
            require "connection.php";
        
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
                
                $a=$result["ID"];
                $b=$result["book name"];
                $c=$result["availability"];
                
                echo "
                        <tr>
                            <td>$i</td>
                            <td><input type='text' value='$a' name='id$i' readonly></td>
                            <td><input type='text' placeholder='$b' value='$b' name='bname$i'></td>
                            <td><select name='avail$i'><option selected disabled>$c</option><option>Available</option><option>Unavailable</option></select></td>
                        </tr>";
                $i++;
            }
            
            echo "</table><input type='submit' value='Modify'></form>";
        ?>
    </body>
</html>