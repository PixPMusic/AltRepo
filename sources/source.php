<?php
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";

class Source {
    private $definites = array();

    public function getApps(): array {
        return $appItems;
    }
    public function getNews(): array {
        return $newsItems;
    }
    public function getDefinites(): array {
        return $this->$definites;
    }
}
?>