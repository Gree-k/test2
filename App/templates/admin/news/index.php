<div class="blog-header">
    <p class="lead blog-description">Тестовый вариант новостной ленты</p>
</div>

<?php
if (!empty($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
} ?>

<?php if(!empty($error)):?>
    <div class="alert alert-danger">
        <?= $error->getMessage();?>
    </div>
<?php endif;?>

<?php if(!empty($news)):?>
<div class=" blog-main">
    <?php foreach ($news as $article):?>
        <div class="blog-post">
            <a href="/News/One/id/<?=$article->id;?>"><h2 class="blog-post-title"><?= $article->title; ?></h2></a><br>
            <?php if(!empty($article->user)): ?>
                <p class="blog-post-meta">
                Автор: <?= $article->user->name; ?>
                </p>
            <?php endif; ?>
            <p>
                <?= mb_substr($article->text,0,50)?>
                <?php if(mb_strlen($article->text)>50):?>
                    &nbsp;&hellip;
                    <a href="index.php?act=One&id=<?=$article->id; ?>">Читать&nbsp;далее</a>
                <?php endif;?>
            </p>
        </div>
    <?php endforeach;?>
</div>
<?php else:?>
    <h1>Новостей нет</h1>
<?php endif;?>






<!---->
<?php //foreach($news as $article):?>
<!--    <div class="panel panel-default">-->
<!--        <div class="panel-heading">--><?php //echo $article->title; ?><!--</div>-->
<!--        <div class="panel-body">--><?php //echo $article->text; ?><!--</div>-->
<!--        --><?php //if(!empty($article->user)): ?>
<!--            <div class="panel-body">-->
<!--                Автор: --><?//= $article->user->name; ?>
<!--            </div>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
<?php //endforeach; ?>
