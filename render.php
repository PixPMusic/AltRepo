<?php
include_once "./classes/repo.php";
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";
include_once "./classes/app/permission.php";
include_once "./sources/unc0ver.php";
include_once "./classes/mergerepo.php";

$name = "Pixel's Repo";
$identifier = "cc.pixp.repo";
$sourceURL = "https://repo.potatotoast.com/render.php";
$apps = array();
$news = array();

$u0 = new unc0ver;

MergeRepo::merge_repo($apps, $news, $u0);

$output = new Repo(
    $name,
    $identifier,
    $sourceURL,
    $apps,
    $news
);

echo json_encode($output->$repo, JSON_PRETTY_PRINT);
?>