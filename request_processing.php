<?php
    require "connection.php";

    if(isset($_POST["idin"])) {
    $id=$_POST["idin"];
    $avail=$POST["avial"];

    $sql=$conn->query("UPDATE booklist SET `availability`=$avail where `ID`=int($id)");
    $sql1=$conn->query("DELETE FROM inrequests WHERE `ID`=int($id)");
    }

    if(isset($_POST["idout"])) {
        $id=$_POST["idout"];
        $avail=$POST["avial"];
    
        $sql=$conn->query("UPDATE booklist SET `availability`=$avail where `ID`=int($id)");
        $sql1=$conn->query("DELETE FROM outrequests WHERE `ID`=int($id)");
        }

    if(isset($_POST["idinrejected"])) {
        $id=$_POST["idinrejected"];
    
        $sql=$conn->query("DELETE FROM inrequests WHERE `ID`=int($id)");
        }

    if(isset($_POST["idoutrejected"])) {
        $id=$_POST["idoutrejected"];
    
        $sql=$conn->query("DELETE FROM outrequests WHERE `ID`=int($id)");
        }