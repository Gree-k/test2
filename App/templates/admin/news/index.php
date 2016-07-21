<a href="/Admin/Form" class="btn btn-default">Добавить статью</a>

<?php
if (!empty($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
} ?>

<?php if (!empty($error)): ?>
    <div class="alert alert-danger">
        <?= $error->getMessage(); ?>
    </div>
<?php endif; ?>

<?php if (!empty($news)): ?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Text</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($news as $article): ?>
            <tr>
                <td><?= $article->title ?></td>
                <td><?= mb_substr($article->text, 0, 40) ?></td>
                <td><a href="/Admin/Form/id/<?= $article->id ?>">Редактировать</a></td>
                <td><a href="/Admin/DeleteNews/id/<?= $article->id ?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>

        <?php else: ?>
            <h1>Новостей нет</h1>
        <?php endif; ?>
    </table>
</div>
