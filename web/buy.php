<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
	<?php 
		$book_id = $_GET['authors_id'];
	 ?>
<body>
    <div class="container">
    	 <div class="form">
				
            <form action="admin/admin.php" method="POST">
               <input type="text" name="Adress" placeholder="Ваша Адреса" required="">
                <br>
                <input type="text" name="full_name" placeholder="Ваше повне ім'я" required="">
                <br>
                <input type="text" name="count" placeholder="Кількість книжок" required="">
                <br>
                <input type="hidden" name="varname" value="var_value">
                <br> 
                <input type="submit" name="send" value="Buy" >
                <input type="reset">
            </form>
    </div>
</div>
</body>

</html>