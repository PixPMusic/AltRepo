<?php
class AppItem {
    public $name;
    private $bundleIdentifier;
    private $developerName;
    private $subtitle;
    private $version;
    private $versionDate;
    private $versionDescription;
    private $downloadURL;
    private $localizedDescription;
    private $iconURL;
    private $tintColor;
    private $size;
    private $permissions;
    private $screenshotURLs;
    public $beta;

    private $appItem=array();

    public function getAppItem() {
        return $this->appItem;
    }

    public function __construct($name, $bundleIdentifier, $developerName,
        $subtitle, $version, $versionDate, $versionDescription, $downloadURL,
        $localizedDescription, $iconURL, $tintColor, $size, $permissions,
        $screenshotURLs, $beta) {
            $this->name = $name;
            $this->bundleIdentifier = $bundleIdentifier;
            $this->developerName = $developerName;
            $this->subtitle = $subtitle;
            $this->version = $version;
            $this->versionDate = $versionDate;
            $this->versionDescription = $versionDescription;
            $this->downloadURL = $downloadURL;
            $this->localizedDescription = $localizedDescription;
            $this->iconURL = $iconURL;
            $this->tintColor = $tintColor;
            $this->size = $size;
            $this->permissions = $permissions;
            $this->screenshotURLs = $screenshotURLs;
            $this->beta = $beta;

            $this->appItem = array(
                "name" => $this->name,
                "bundleIdentifier" => $this->bundleIdentifier,
                "developerName" => $this->developerName,
                "subtitle" => $this->subtitle,
                "version" => $this->version,
                "versionDate" => $this->versionDate,
                "versionDescription" => $this->versionDescription,
                "downloadURL" => $this->downloadURL,
                "localizedDescription" => $this->localizedDescription,
                "iconURL" => $this->iconURL,
                "tintColor" => $this->tintColor,
                "size" => $this->size,
                "permissions" => $this->permissions,
                "screenshotURLs" => $this->screenshotURLs,
                "beta" => $this->beta
            );
    }
}
?>