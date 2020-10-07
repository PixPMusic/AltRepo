<?php
include_once "./sources/source.php";

class Odyssey extends Source {
    private $name = "Odyssey";
    private $bundleIdentifier = "org.coolstar.odyssey";
    private $developerName = "Odyssey Team";
    private $localizedDescription = "Supporting iOS Versions: 13.0 - 13.3 & 13.4-13.5.\nOdyssey is the first jailbreak to be written almost entirely in Swift. Completely open source and welcomes community contributions and pull requests, as a tribute to the dearly departed s0uthwes and his continued optimism and faith in the project. Comes with the open source Procursus bootstrap, designed from the ground up with openness and compatiblity in mind. Along with a new tweak injection platform, libhooker.";
    private $tintColor = "D287F4";
    private $iconURL = "https://theodyssey.dev/assets/images/icon.png";
    private $webURL = "https://theodyssey.dev/";
    private $doNotify = true;
    private $definites = array(
        "org.coolstar.odyssey"
    );

    private $subtitle;
    private $version;
    private $versionDate;
    private $versionDescription;
    private $downloadURL;
    private $size;
    private $permissions = array();
    private $screenshotURLs;
    private $beta = false;
    public function __construct() {
        $opts = [
            'http' => [
                    'method' => 'GET',
                    'header' => [
                            'User-Agent: PHP'
                    ]
            ]
        ];
        $context = stream_context_create($opts);
        $apiurl = "https://api.github.com/repos/TheOdysseyJB/Odyssey/releases";
        $json = file_get_contents($apiurl, false, $context);
        $obj = json_decode($json);
        $this->subtitle = $obj[0]->{"name"};
        $this->version = substr($obj[0]->{"tag_name"}, 1);
        $this->versionDate = substr($obj[0]->{"published_at"}, 0, 10);
        $this->versionDescription = $obj[0]->{"body"};
        $this->downloadURL = $obj[0]->{"assets"}[0]->{"browser_download_url"};
        $this->size = $obj[0]->{"assets"}[0]->{"size"};
        $this->permissions = array();
        $this->screenshotURLs = array(
            "https://theodyssey.dev/assets/images/ss-1.png",
            "https://theodyssey.dev/assets/images/ss-2.png",
            "https://theodyssey.dev/assets/images/ss-3.png"
        );
        $this->beta = $obj[0]->{"prerelease"};


    }

    public function getApps(): array {
        $appitem = new AppItem(
            $this->name, $this->bundleIdentifier, $this->developerName, $this->subtitle,
            $this->version, $this->versionDate, $this->versionDescription, $this->downloadURL,
            $this->localizedDescription, $this->iconURL, $this->tintColor, $this->size,
            $this->permissions, $this->screenshotURLs, $this->beta
        );
        $appItems = array($appitem->getAppItem());
        return $appItems;
    }

    public function getNews(): array {
        $newsitem = new NewsItem(
            $this->name . " " . $this->subtitle,
            $this->bundleIdentifier . "-" . $this->version,
            $this->name . " " . $this->subtitle . " out now!",
            $this->versionDate,
            $this->tintColor,
            null,
            $this->webURL,
            $this->bundleIdentifier,
            true
        );
        $newsItems = array($newsitem->getNewsItem());
        return $newsItems;
    }
}
?>