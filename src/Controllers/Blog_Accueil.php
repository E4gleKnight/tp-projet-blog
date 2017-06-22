<?php

$connexion = getPDO();
$sql = "select titre,date_post,chapeau,contenu,article_id from article";
$rs = $connexion->query($sql);
$articles=$rs->fetchAll(PDO::FETCH_ASSOC);
$connexion = getPDO();
$sql = "select count(*) from article";
$rs = $connexion->query($sql);
$nbArticles=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($nbArticles);


renderView(
    "Blog_Accueil",
    [
        "pageTitle" => "Accueil",
        "articles"=>$articles
    ]
);