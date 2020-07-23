<?php
include_once "./sources/source.php";

class PPSSPP extends Source {
    private $definites = array(
        "org.ppsspp.ppsspp"
    );

    private $name = "PPSSPP";
    private $bundleIdentifier = "org.ppsspp.ppsspp";
    private $localizedDescription = "PPSSPP is a free and open-source PSP emulator for Windows, macOS, Linux, iOS, Android, Nintendo Switch, BlackBerry 10, and Symbian with an increased focus on speed and portability. It was first released to the public on November 1, 2012, licensed under the GNU GPLv2 or later.";
    private $webURL = "https://www.ppsspp.org/";
    private $doNotify = false;
    private $developerName = "PPSSPP Team";
    private $tintColor = "008ab8";
    private $iconURL = "https://cydia.ppsspp.org/CydiaIcon.png";

    private $stableURL = "https://p.xx.wtf/Archive/ipa/PPSSPP_v1.9.3.ipa";
    private $stableVersion = "1.9.3";
    private $stableDate = "2020-07-14";
    private $stableSize = 17480000;
    private $stableDescription = "Latest 1.9 build from https://p.xx.wtf/Archive/ipa";

    private $betaURL = "https://p.xx.wtf/Archive/ipa/PPSSPP_v1.10.3-99-gf1e5dd244.ipa";
    private $betaVersion = "1.10.3-99";
    private $betaDate = "2020-07-14";
    private $betaSize = 17490000;
    private $betaDescription = "Latest build from https://p.xx.wtf/Archive/ipa";


    private $subtitle = "PSP Emulator";
    private $permissions = array();
    private $screenshotURLs = array(
        "https://www.ppsspp.org/img/screenshots/projectdivaextend.jpg",
        "https://www.ppsspp.org/img/screens/small/Assassins_Creed_Bloodlines_-_A_Yuanda.jpg",
        "https://www.ppsspp.org/img/screens/NARUTO_SHIPPUDEN_Ultimate_Ninja_Impact_-_A_Yuanda.jpg"
    );
    private $beta = false;

    private $appItems = array();
    private $newsItems = array();

    public function __construct() {
        $stable = new AppItem(
            $this->name, $this->bundleIdentifier, $this->developerName, $this->subtitle,
            $this->stableVersion, $this->stableDate, $this->stableDescription, $this->stableURL,
            $this->localizedDescription, $this->iconURL, $this->tintColor, $this->stableSize,
            $this->permissions, $this->screenshotURLs, false
        );
        $beta = new AppItem(
            $this->name, $this->bundleIdentifier, $this->developerName, $this->subtitle,
            $this->betaVersion, $this->betaDate, $this->betaDescription, $this->betaURL,
            $this->localizedDescription, $this->iconURL, $this->tintColor, $this->betaSize,
            $this->permissions, $this->screenshotURLs, true
        );

        //array_push($this->appItems, $stable->getAppItem());
        array_push($this->appItems, $beta->getAppItem());
    }

    public function getApps(): array {
        return $this->appItems;
    }
    public function getNews(): array {
        return $this->newsItems;
    }
}