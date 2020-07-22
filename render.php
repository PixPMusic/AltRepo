<?php
include_once "./repoconfig.php";

echo json_encode($output->$repo, JSON_PRETTY_PRINT);
?>