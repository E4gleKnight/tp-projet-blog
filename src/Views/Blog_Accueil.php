<h1> Mon Blog</h1>
<h2>Derniers articles publiés</h2>

<?php

foreach ($articles as $article):?>
    <div id="separation"></div>
    <br>
<div id="article">
<div id="title">
    <h1> <?= $article['titre'] ?> : </h1>

    <br>
    <br>
</div>
    <br>
    <div id="date_post">
        <?= $article['date_post'] ?>
    </div>
    <br>
    <div id="chapeau">
        <h1>Résumé</h1>
        <br>
        <?= $article['chapeau']."....." ?>
</div>
<br>
<a href="/?controller=Blog_Article&id=<?=$article["article_id"]?>">En savoir plus...</a>
</div>
    <br>

<?php endforeach;?>