<?php 
    
    $book_id = $_GET['authors_id'];
    $link = mysqli_connect('localhost', 'mysql', 'mysql','BookCatalog');

    if(!$link){
    echo "ERROR!";
}
    if(!is_numeric($book_id)) exit();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
<?php
    function tableGetComponent($book_id)
    {
        global $link;
        $sql = "SELECT * FROM table_book AS A JOIN table_authorsOfBook AS B ON A.IdBook = B.IdBook JOIN table_authors AS C ON B.IdAuthor = C.IdAuthor 
        WHERE B.IdAuthor =  $book_id";
        $result = mysqli_query($link, $sql);
        $authors = mysqli_fetch_all($result, MYSQL_ASSOC);

        return $authors;
    }
?>
 </head>
 <body>
    <div class="container">
    <?php $getComponent = tableGetComponent($book_id); ?>
    <?php foreach ($getComponent as $value): ?>
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h1><?=$value['BookName']?> </h1>
                </div>
                <div class="post-content">
                    <?=$value['Description']?>
                </div>
            </div>
                <div class="author">
                    <a href=""><?=$value['AuthorName']?></a>
                </div>
            <div class="col-md-3">
                <?=$value['Price']?>
            </div>
        </div>
        <hr>
        <button><a class="btn btn-info btn-sm" href="buy.php?authors_id=<?=$value['IdAuthor']?>">Buy</a></button>
    <?php endforeach; ?>

    </div>
 </body>
 </html> 