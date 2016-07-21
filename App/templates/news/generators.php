<?php foreach ($news as $article) :?>
    <h1><?= $article->title?></h1>
    <p><?= $article->text?></p>
<?php endforeach; ?>
