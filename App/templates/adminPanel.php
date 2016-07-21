<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/App/templates/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include __DIR__ . '/navbar.html';
?>

<div class="container">
    <div class="row" style="padding-left: 10px; padding-right: 10px; ">
        <?php echo $temp?>
    </div>
</div>




<div id="footer">
    <div class="container text-center">
        <p class="text-muted">&copy; made by <a href="#">Greek</a></p>
    </div>
</div>

</body>
</html>