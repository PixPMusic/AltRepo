<?php
include_once './repoconfig.php';
include_once "./classes/repo.php";


$out = fopen("repo.json", "w");
$json = json_encode($output->getRepo(), JSON_PRETTY_PRINT);
fwrite($out, $json);
?>