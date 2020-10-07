<?php
include_once "./classes/repo.php";
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";
include_once "./classes/app/permission.php";
include_once "./sources/unc0ver.php";
include_once "./classes/mergerepo.php";
include_once "./sources/externalrepo.php";
include_once "./sources/odyssey.php";

$name = "Pixel's Repo";
$identifier = "io.altstore.example";
$sourceURL = "https://repo.pixp.cc/repo.json";
$apps = array();
$news = array();

$odyssey = new Odyssey;
MergeRepo::merge_repo($apps, $news, $odyssey);

$u0 = new unc0ver;
MergeRepo::merge_repo($apps, $news, $u0);

$ppsspp = new ExternalRepo("https://techmunchies.net/.netlify/functions/altstore", array(
     "org.ppsspp.ppsspp"
 ));
 MergeRepo::merge_repo($apps, $news, $ppsspp);

$ish = new ExternalRepo("https://ish.app/altstore.json", array(
    "app.ish.iSH"
));
MergeRepo::merge_repo($apps, $news, $ish);

$quark = new ExternalRepo("https://quarksources.imfast.io/quarksource.json", array());
MergeRepo::merge_repo($apps, $news, $quark);

$quarkpp = new ExternalRepo("https://quarksources.imfast.io/quarksource++.json", array());

$output = new Repo(
    $name,
    $identifier,
    $sourceURL,
    $apps,
    $news
);
?>
