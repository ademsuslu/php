<?php
include "connect.php";

if(isset($_GET["deleteid"])){
    $deleteid = $_GET["deleteid"];

    $sql = "DELETE FROM `crud` where id = '$deleteid'";
    $result = mysqli_query($baglan,$sql);
    
    if($result) {
    echo "Deleted successfully";
    } 
    else {
        die("Deleted unSuccesfuly: ".mysqli_connect_error($baglan));
    }

}


?>