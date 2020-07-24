<?php
include_once "./sources/source.php";
include_once "./classes/appitem.php";
include_once "./classes/newsitem.php";

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
        if(!is_null($this->obj->{"apps"})) {
            foreach($this->obj->{"apps"} as $app) {
                $name = $app->name;
                $bundleIdentifier = $app->bundleIdentifier;
                $developerName = $app->developerName;
                $subtitle = $app->subtitle;
                $version = $app->version;
                $versionDate = $app->versionDate;
                $versionDescription = $app->versionDescription;
                $downloadURL = $app->downloadURL;
                $localizedDescription = $app->localizedDescription;
                $iconURL = $app->iconURL;
                $tintColor = $app->tintColor;
                $size = $app->size;
                $permissions = array();
                if (!is_null($app->permissions)) {
                    foreach($app->permissions as $perm) {
                        array_push($permissions, $perm);
                    }
                }
                $screenshotURLs = $app->screenshotURLs;
                $beta = false;
                $beta = $app->beta;
                $appItem = new AppItem($name, $bundleIdentifier, $developerName,
                    $subtitle, $version, $versionDate, $versionDescription,
                    $downloadURL, $localizedDescription, $iconURL, $tintColor,
                    $size, $permissions, $screenshotURLs, $beta);

                array_push($appItems, $appItem->getAppItem());
            }
        }
        return $appItems;
    }

    public function getNews(): array {
        $newsItems = array();
        if (!is_null($this->obj->{"news"})) {
            foreach($this->obj->{"news"} as $news) {
                $title = $news->title;
                $identifier = $news->identifier;
                $caption = $news->caption;
                $date = $news->date;
                $tintColor = $news->tintColor;
                $imageURL = $news->imageURL;
                $url = "";
                $url = $news->url;
                $appID = $news->appID;
                $notify = $news->notify;
                $newsItem = new NewsItem($title, $identifier, $caption,
                $date, $tintColor, $imageURL, $url, $appID, $notify);

                array_push($newsItems, $newsItem->getNewsItem());
            }
        }
        return $newsItems;
    }

    public function getDefinites(): array {
        return $this->definites;
    }
}
?>