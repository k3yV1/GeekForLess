<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'mysql', 'mysql','BookCatalog') or die("Ошибка " . mysqli_error($link));

if(isset($_POST['send'])){
    // экранирования символов для mysql
    global $conn;

     $IdAuthor = $_POST['BookName'];

    // выполняем запрос
    $result = mysqli_query($conn,"DELETE FROM table_book WHERE IdAuthor = '$IdAuthor'");
    if($result)
    {
        echo "<span style='color:red;'>Данные удалены</span><br>";
    }
    // закрываем подключение
 
}
// if(isset($_POST['send'])){
//     // экранирования символов для mysql
//     global $conn;

     

//     // выполняем запрос
//     $result = mysqli_query($conn,"INSERT INTO table_genreOfBook (idGenre, idBook)
//  VALUES('{$_POST["idGenre"]} ','{$_POST["IdBook"]} ')");
//     if($result)
//     {
//         echo "<span style='color:red;'>Данные добавлены</span>";
//     }
//     // закрываем подключение
 
// }
?>
<h2>Добавить нового автора</h2>
<form method="POST">
    <p>Введите IdBook:<br>
        <input type="text" name="IdBook" /></p>
    <p>Введите Имя Книги:<br>
        <input type="text" name="BookName" /></p>
    <p>Добавьте описание:<br>
        <input type="text" name="Description" /></p>
    <p>Введите цену:<br>
        <input type="text" name="Price" /></p>
    <p>Введите IdAuthor:<br>
        <input type="text" name="IdAuthor" /></p>
    <p>Введите Имя Автора:<br>
        <input type="text" name="AuthorName" /></p>
        <p>Введите idGenre:<br>
        <input type="text" name="idGenre" /></p>
        <p>Введите Genre:<br>
        <input type="text" name="Genre" /></p>
    <!-- <p>Имя Книги: <br>
    <input type="text" name="BookName" /></p> -->
    <input type="submit" name="send"  value="Добавить">
</form>
</body>
</html>