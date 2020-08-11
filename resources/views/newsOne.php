<?php
include 'menu.php';
?>

<h2><?=$news['title']?></h2>
<p><?=$news['text']?></p>

<a href="<?= route('NewsCategories.NewsCategories') ?>">В категории |</a>
<a href="<?= route('news.News') ?>">Ко всем новостям </a>

