<?php
include_once "./repoconfig.php";

echo json_encode($output->getRepo(), JSON_PRETTY_PRINT);
?>