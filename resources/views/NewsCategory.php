<!DOCTYPE html>
<html>
<?php include "menu.php" ?>
<?//php dd($news);    ?>
<a href="<?= route('news.News') ?>">Все новости |</a>
<a href="<?= route('NewsCategories.NewsCategories') ?>">Новости по категориям</a><br>
<?//php dd($news);    ?>
<?php foreach ($news as $item): ?>
    <a href="<?= route('news.NewsOne', $item['id']) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
</html>
