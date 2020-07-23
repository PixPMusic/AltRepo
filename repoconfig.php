<?php
include_once "./classes/repo.php";
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";
include_once "./classes/app/permission.php";
include_once "./sources/unc0ver.php";
include_once "./classes/mergerepo.php";
include_once "./sources/externalrepo.php";
include_once "./sources/ppsspp.php";

$name = "Pixel's Repo";
$identifier = "cc.pixp.repo";
$sourceURL = "https://repo.potatotoast.com/repo.json";
$apps = array();
$news = array();

$u0 = new unc0ver;
MergeRepo::merge_repo($apps, $news, $u0);

$ppsspp = new PPSSPP;
MergeRepo::merge_repo($apps, $news, $ppsspp);

$output = new Repo(
    $name,
    $identifier,
    $sourceURL,
    $apps,
    $news
);
?>