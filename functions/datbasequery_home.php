

<?php
include 'config/dbconn.php';

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
function getFirstOne($table){
    global $con;
    $query = "SELECT * FROM $table LIMIT 1";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

function getAllByCategory($table, $category_id){
    global $con;
    $query = "SELECT * FROM $table WHERE category_id = '$category_id'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
