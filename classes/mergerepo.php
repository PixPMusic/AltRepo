<?php
class MergeRepo {
    public static function merge_repo(&$coreapps, &$corenews, $add) {
        foreach ($add->getApps() as $app) {
            array_push($coreapps, $app);
        }
        foreach ($add->getNews() as $news) {
            array_push($corenews, $app);
        }
    }
}