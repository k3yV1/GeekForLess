
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
 </head>
 <body>
    <div class="container">
    <?php 
     $book_id = $_GET['authors_id'];
    require_once 'function.php';
    $getComponent = new Test;
    $getComponentResult = $getComponent->tableGetComponent($book_id); ?>
    <?php foreach ($getComponentResult as $value): ?>
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
        <a class="btn btn-info btn-sm" href="buy.php?authors_id=<?=$value['IdAuthor']?>">Buy</a></button>
    <?php endforeach; ?>

    </div>
 </body>
 </html> 