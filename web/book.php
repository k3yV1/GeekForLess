<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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

$query="SELECT * FROM table_book AS Book
JOIN table_authorsOfBook AS tblAOfBook ON Book.IdBook = tblAOfBook.IdBook";
/*$query="select * from tbBook";*/
$result=$conn->query($query);

if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        echo $row['BookName']."<br>";
        echo $row['Description']."<br>";
        //echo $row['AuthorName']."<br>";
        //echo $row['Genre']."<br>"."<br>";
        echo "<hr>";
    }
}else{
    echo "No data:(";
}
?>	
</body>
</html>