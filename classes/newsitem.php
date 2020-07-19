<?php
class NewsItem{
    private $title;
    private $identifier;
    private $caption;
    private $date;
    private $tintColor;
    private $imageURL;
    private $url;
    private $appID;
    private $notify;

    private $newsItem=array();

    public function getNewsItem() {
        return $this->newsItem;
    }

    public function __construct($title, $identifier, $caption,
        $date, $tintColor, $imageURL, $url, $appID,
        $notify) {
            $this->title = $title;
            $this->identifier = $identifier;
            $this->caption = $caption;
            $this->date = $date;
            $this->tintColor = $tintColor;
            $this->imageURL = $imageURL;
            $this->url = $url;
            $this->appID = $appID;
            $this->notify = $notify;

            $this->newsItem = array(
                "title" => $this->title,
                "identifier" => $this->identifier,
                "caption" => $this->caption,
                "date" => $this->date,
                "tintColor" => $this->tintColor,
                "imageURL" => $this->imageURL,
                "url" => $this->url,
                "appID" => $this->appID,
                "notify" => $this->notify
            );
        }

}
?>