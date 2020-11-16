<?php
include_once "./sources/source.php";

class PAX extends Source {
    private $name = "PAX Mobile";
    private $subtitle = "Elevate your Experience";
    private $bundleIdentifier = "com.paxlabs.paxvapor";
    private $developerName = "PAX Labs, Inc.";
    private $localizedDescription = "Control your PAX Device from iOS";
    private $size = 35797093;
    private $tintColor = "424242";
    private $iconURL = "https://repo.pixp.cc/assets/pax/icon.png";
    private $webURL = "https://www.pax.com/";
    private $doNotify = false;
    private $beta = false;
    private $version = "4.0.2";
    private $permissions = array();
    private $definites = array("com.paxlabs.paxvapor");
    private $versionDate = "2019-12-31";
    private $versionDescription = "Last AppStore Release";
    private $downloadURL = "https://repo.pixp.cc/assets/pax/pax.ipa";
    private $screenshotURLs = array(
        "https://repo.pixp.cc/assets/pax/screenshot.jpeg"
    );

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
