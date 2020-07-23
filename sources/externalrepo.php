<?php
include_once "./sources/source.php";
include_once "./classes/appitem.php";

class ExternalRepo extends Source {
    private $obj = array();

    public function __construct($url, $definites) {
        $this->definites = $definites;
        $opts = [
            'http' => [
                    'method' => 'GET',
                    'header' => [
                            'User-Agent: PHP'
                    ]
            ]
        ];
        $context = stream_context_create($opts);
        $json = file_get_contents($url, false, $context);
        $this->obj = json_decode($json);
    }

    public function getApps(): array {
        $appItems = array();
        foreach($this->obj->{"apps"} as $app) {
            $appItem = new AppItem($app->name, $app->bundleIdentifier, $app->developerName,
                $app->subtitle, $app->version, $app->versionDate, $app->versionDescription,
                $app->downloadURL, $app->localizedDescription, $app->iconURL, $app->tintColor,
                $app->size, $app->permissions, $app->screenshotURLs, $app->beta);

            array_push($appItems, $appItem->getAppItem());
        }
        return $appItems;
    }

    public function getNews(): array {
        $newsItems = array();
        foreach($this->obj->{"news"} as $news) {
            $newsItem = new NewsItem($news->title, $news->identifier, $news->caption,
            $news->date, $news->tintColor, $news->imageURL, $news->url, $news->appID,
            $news->notify);

            array_push($newsItems, $newsItem->getNewsItem());
        }
        return $newsItems;
    }

    public function getDefinites(): array {
        return $this->definites;
    }
}
?>