<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://yastatic.net/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://yastatic.net/jquery-ui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(!isset($_GET['cont']) || 'News'==$_GET['cont']) echo 'class="active"'?>>
                    <a href="/News">Новости</a></li>
                <li <?php if(isset($_GET['cont']) && 'Gallery'==$_GET['cont']) echo 'class="active"'?>>
                    <a href="/Gallery">Галерея</a></li>
                <li <?php if(isset($_GET['cont']) && '#'==$_GET['cont']) echo 'class="active"'?>>
                    <a href="#">Что-то еще</a></li>
            </ul>
            <div class="navbar-right" style="padding-top: 7px;">
                <?php if (isset($_SESSION['username'])):?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="dropdown">
                            <?=$_SESSION['username'];?> <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Например ЛК</a></li>
                            <?php if('admin'==$_SESSION['access']):?>
                                <li><a href="main.php?cont=Admin">Панель администратора</a></li>
                            <? endif;?>
                            <li><a href="#">Что-то иное</a></li>
                            <li class="divider"></li>
                            <li><a href="/index.php?cont=Site&act=Logout">Выход</a></li>
                        </ul>
                        <a class="btn btn-default" href="/index.php?cont=Site&act=Logout">
                            <span class="glyphicon glyphicon-log-out"></span></a>
                    </div>
                <?php else: ?>
                    <button type="button" id="login" class="btn btn-default" style="padding-left: 7px;"><span
                            class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Вход
                    </button>
                <?php endif; ?>
            </div>


            <form class="navbar-form navbar-right" style="margin-right: 30px;">
                <input type="text" class="form-control" placeholder="Search...">
            </form>



        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding-left: 10px; padding-right: 10px; ">
        <?php echo $data?>
    </div>
</div>



<div id="footer">
    <div class="container">
        <p class="text-muted">&copy; made by <a href="#">Greek</a></p>
    </div>
</div>

</body>
</html>