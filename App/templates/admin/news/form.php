<?php
if (!empty($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);

} ?>

<?php if (!empty($errors)):?>
    <div>
        <?php foreach ($errors as $error):?>
            <div class="alert alert-danger">
                <?= $error->getMessage();?>
            </div>
        <?php endforeach;?>
    </div>
<?php endif;?>


<form action="/Admin/SaveNews" method="post">
    <?php if(!empty($article)):?>
        <input type="hidden" name="id" value="<?=$article->id;?>">
    <? endif;?>
    Заголовок статьи:<br>
    <input type="text" name="title" value="<?=empty($article) ? '' : $article->title;?>"><br>
    Содержание:<br>
    <textarea name="text" rows="10"><?=empty($article) ? '' : $article->text;?></textarea><br>
    <input type="submit" value="Добавить">
</form>