<!DOCTYPE html>
<html>
<?php include "menu.php" ?>
<?//php dd($news);    ?>
<a href="<?= route('news.News') ?>">Все новости|</a> Новости по категориям<br>
<?php foreach ($categories as $category): ?>
    <a href="<?= route('NewsCategories.NewsCategory', $category['name']) ?>"><?= $category['category'] ?></a><br>
<?php endforeach; ?>
