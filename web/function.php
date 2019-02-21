<?php
class Test{
 function connectionToDB()

{
    include 'config.php';
    $conn = mysql_connect(LOCALHOST,USER,PASSWORD,DATABASENAME);
    mysql_select_db('BookCatalog');
    return $conn;
}

function tableBook()
  {
    $link = $this->connectionToDB();
    $sql = "SELECT * FROM table_book AS A JOIN table_authorsOfBook AS B ON A.IdBook = B.IdBook JOIN table_authors AS C ON B.IdAuthor = C.IdAuthor
    WHERE A.IdBook = B.IdAuthor";
    $query = mysql_query($sql);
    $result = array();
    $index = 0;
    while($row = mysql_fetch_assoc($query)){
        $result[$index] = $row;
        $index++;
    }
    return $result;
  }

      function tableGetComponent($book_id)
    {
    
    $book_id = $_GET['authors_id'];
    if(!is_numeric($book_id)) exit();
        $link = $this->connectionToDB();
        $sql = "SELECT * FROM table_book AS A JOIN table_authorsOfBook AS B ON A.IdBook = B.IdBook JOIN table_authors AS C ON B.IdAuthor = C.IdAuthor 
        WHERE B.IdAuthor =  $book_id";
        $query = mysql_query($sql);
        $result = array();
        $index = 0;
        while($row = mysql_fetch_assoc($query)){
            $result[$index] = $row;
            $index++;
        }
        return $result;
    }
    function AddElements()
    {
        $conn = connectionToDB();
if(isset($_POST['send'])){
    
    $result = mysql_query($conn,  "INSERT INTO table_book VALUES('{$_POST["IdBook"]} ','{$_POST["BookName"]} ','{$_POST["Description"]} ','{$_POST["Price"]} ')");
    if($result)
    {
        echo "<span style='color:red;'>Данные добавлены</span>";
    }
    
}
if(isset($_POST['send'])){
 
    $query = mysql_query("INSERT INTO table_authorsOfBook (IdBook, IdAuthor)
VALUES('{$_POST["IdBook"]} ','{$_POST["IdAuthor"]} ')") ;
    if($query)
    {
        echo "<span style='color:red;'>Данные добавлены</span><br>";
    }
   
}
if(isset($_POST['send'])){
    $result = mysql_query($conn,"INSERT INTO table_authors (IdAuthor, AuthorName)
 VALUES('{$_POST["IdAuthor"]} ','{$_POST["AuthorName"]} ')");
    if($result)
    {
        echo "<span style='color:red;'>Данные добавлены</span><br>";
    }
 
}
if(isset($_POST['send'])){
  
    $result = mysql_query($conn,"INSERT INTO table_genre (idGenre, Genre)
 VALUES('{$_POST["idGenre"]} ','{$_POST["Genre"]} ')");
    if($result)
    {
        echo "<span style='color:red;'>Данные добавлены</span><br>";
    }
   
 
}
if(isset($_POST['send'])){
  
    $result = mysql_query($conn,"INSERT INTO table_genreOfBook (idGenre, idBook)
 VALUES('{$_POST["idGenre"]} ','{$_POST["IdBook"]} ')");
    if($result)
    {
        echo "<span style='color:red;'>Данные добавлены</span>";
    }
 
}
    }
}
?>