<?php

function OpenConn(){
    $dbhost="localhost";
    $dbuser="ishu";
    $dbpass="Ishan_002";
    $db="Library";

    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection unsuccessful".$conn->error);

    return $conn;
}

function CloseConn($conn){
    $conn->close();
}