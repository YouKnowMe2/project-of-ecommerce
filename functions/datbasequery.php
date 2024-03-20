

<?php
include '../config/dbconn.php';

function getAll($table){
    global $con;
    $query = "SELECT * FROM $table";
    $query_run = mysqli_query($con, $query);
    return $query_run;
    
}

function getOne($table, $id){
    global $con;
    $query = "SELECT * FROM $table WHERE id = $id";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

