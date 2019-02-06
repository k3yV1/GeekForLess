<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'C:/OSPanel/domains/localhost/BookCatalog/web/function.php';
AddElements();
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