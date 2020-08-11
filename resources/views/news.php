<!DOCTYPE html>
<html>
    <?php include "menu.php" ?>
    <?//php dd($news);    ?>
    Все новости | <a href="<?= route('NewsCategories.NewsCategories') ?>">Новости по категориям</a><br>
    <?php foreach ($news as $item): ?>
        <a href="<?= route('news.NewsOne', $item['id']) ?>"><?= $item['title'] ?></a><br>
    <?php endforeach; ?>
</html>

