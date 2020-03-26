<?php

    $dbhost="localhost";
    $dbuser="ishu";
    $dbpass="Ishan_002";
    $db="books";

    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection unsuccessful".$conn->error);

