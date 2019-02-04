<?php
$host='localhost';
$user='mysql';
$pass='mysql';
$dbse='BookCatalog';

$conn = new mysqli($host,$user,$pass,$dbse);
if($conn->connect_error){
    echo "Connect failed".$conn->connect_error;
    exit();
}
?>