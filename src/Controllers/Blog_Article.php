<?php
$id=$_GET["id"];

$connexion = getPDO();
$sql = "select titre,date_post,chapeau,contenu,article_id from article where article_id = $id";
$rs = $connexion->query($sql);
$article=$rs->fetch(PDO::FETCH_ASSOC);


renderView(
    "Blog_Article",
    [
        "pageTitle" => "Article",
        "article"=>$article
    ]
);