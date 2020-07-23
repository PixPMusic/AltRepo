<?php
class Repo {
    private $name;
    private $identifier;
    private $sourceURL;
    private $apps;
    private $news;

    private $repo = array();

    public function __construct($name, $identifier, $sourceURL, $apps, $news) {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->sourceURL = $sourceURL;
        $this->apps = $apps;
        $this->news = $news;

        $this->repo = array(
            "name" => $this->name,
            "identifier" => $this->identifier,
            "sourceURL" => $this->sourceURL,
            "apps" => $this->apps,
            "news" => $this->news
        );
    }

    public function getRepo() {
        return $this->repo;
    }
}
?>