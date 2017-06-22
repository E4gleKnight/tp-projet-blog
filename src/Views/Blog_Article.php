<h1 >Article Complet</h1>
    <div id="article">
    <div id="title">
        <h1> <?= $article['titre'] ?> : </h1>
    </div>
        <br>
    <div id="date_post">
        <?= $article['date_post'] ?>
    </div>
    <br>
<div id="content">
        <?= $article['contenu'] ?>
</div>
    <br>
    <a href="/?controller=Blog_Accueil">Retour à l'accueil du blog.</a>
    </div>