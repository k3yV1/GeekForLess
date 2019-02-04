<?php
$link = mysqli_connect('localhost', 'mysql', 'mysql','BookCatalog');

if(!$link){
  echo "ERROR!";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
  function tableBook()
  {
    global $link;
    $sql = "SELECT * FROM table_book AS A JOIN table_authorsOfBook AS B ON A.IdBook = B.IdBook JOIN table_authors AS C ON B.IdAuthor = C.IdAuthor
    WHERE A.IdBook = B.IdAuthor";
    $result = mysqli_query($link, $sql);
    $authors = mysqli_fetch_all($result, MYSQL_ASSOC);

    return $authors;
  }
?>
</head>
<body>
  <div class="container">
<br/>
<?php $aut = tableBook(); ?>
<?php foreach ($aut as $authors): ?>
<div class="row">
      <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
        </a>
      </div>
      <div class="col-md-9">
      <h4><a href="#"></a><?=$authors['AuthorName'] ?></h4>
        <p>
        <?=mb_substr($authors['BookName'], 0, 120, 'utf-8').'...'; ?>
        </p>
        <p><a class="btn btn-info btn-sm" href="post.php?authors_id=<?=$authors['IdAuthor']?>">Read more</a></p>
        <br/>
      </div>
  </div>
<hr>
<?php endforeach; ?>
</body>
</html>