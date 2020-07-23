<?php
include_once "./classes/repo.php";
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";
include_once "./classes/app/permission.php";
include_once "./sources/unc0ver.php";
include_once "./classes/mergerepo.php";
include_once "./sources/externalrepo.php";

$name = "Pixel's Repo";
$identifier = "cc.pixp.repo";
$sourceURL = "https://repo.potatotoast.com/render.php";
$apps = array();
$news = array();

$u0 = new unc0ver;

$quark = new ExternalRepo("https://quarksources.imfast.io/quarksource.json", array());

MergeRepo::merge_repo($apps, $news, $u0);
MergeRepo::merge_repo($apps, $news, $quark);

$output = new Repo(
    $name,
    $identifier,
    $sourceURL,
    $apps,
    $news
);
?>