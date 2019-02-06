<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
      <?php
      		$adress = $_POST['Adress'];
      		$fullname = $_POST['full_name'];
      		$count = $_POST['count'];

      		echo 'Адресс: '.$adress.'<br>';
          echo 'Имя Фамилия: '.$fullname.'<br>';
          echo 'Количество: '.$count;
        ?>
        <div class="add">
           <a href="add.php">Добавити запис</a>
        </div>
          <div class="delete">
           <a href="deleteo.php">Видалити запис</a>
        </div>
          <div class="update">
           <a href="add.php">Редагувати запис</a>
        </div>
    </body>

</html>