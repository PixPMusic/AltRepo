<?php
include_once './repoconfig.php';

$out = fopen("repo.json", "w");
$json = json_encode($output->$repo, JSON_PRETTY_PRINT);
fwrite($out, $json);
?>