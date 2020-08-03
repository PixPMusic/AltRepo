<?php
include_once "./sources/source.php";

class unc0ver extends Source {
    private $name = "unc0ver";
    private $bundleIdentifier = "science.xnu.undecimus";
    private $developerName = "unc0ver Team";
    private $localizedDescription = "Jailbreak Tool";
    private $tintColor = "000000";
    private $iconURL = "https://raw.githubusercontent.com/pwn20wndstuff/Undecimus/master/Undecimus/Assets.xcassets/AppIcon.appiconset/Icon-App-60x60%403x.png";
    private $webURL = "https://unc0ver.dev/";
    private $doNotify = true;
    private $definites = array(
        "science.xnu.undecimus"
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
        $apiurl = "https://api.github.com/repos/pwn20wndstuff/Undecimus/releases";
        $json = file_get_contents($apiurl, false, $context);
        $obj = json_decode($json);
        $this->subtitle = "v5.3.1 release";
        $this->version = "5.3.1";
        $this->versionDate = "2020-07-23";
        $this->versionDescription = "Fix support for removing leftover files from RootLessJB";
        $this->downloadURL = "https://unc0ver.dev/downloads/5.3.1/72004596b31ba3eae886ac6cc781725879d3b7a4/unc0ver_5.3.1.ipa";
        $this->size = 43024790;
        //$this->subtitle = $obj[0]->{"name"};
        //$this->version = substr($obj[0]->{"tag_name"}, 1);
	//$this->versionDate = substr($obj[0]->{"published_at"}, 0, 10);
        //$this->versionDescription = $obj[0]->{"body"};
        //$this->downloadURL = $obj[0]->{"assets"}[0]->{"browser_download_url"};
        //$this->size = $obj[0]->{"assets"}[0]->{"size"};
        $this->permissions = array();
        $this->screenshotURLs = array(
            "https://raw.githubusercontent.com/pwn20wndstuff/Undecimus/master/Resources/Screenshot-1.PNG",
            "https://raw.githubusercontent.com/pwn20wndstuff/Undecimus/master/Resources/Screenshot-2.PNG",
            "https://raw.githubusercontent.com/pwn20wndstuff/Undecimus/master/Resources/Screenshot-3.PNG"
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
