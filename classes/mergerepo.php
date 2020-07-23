<?php
include_once "./classes/appitem.php";
class MergeRepo {
    public static function merge_repo(&$coreapps, &$corenews, &$add) {
        foreach ($add->getApps() as $app) {
            $incore = false;
            $isdef = false;
            $pop;
            if (sizeof($coreapps)) {
                foreach($coreapps as $n => $core) {
                    if($core["name"] == $app["name"]) {
                        if ($core["beta"] == $app["beta"]) {
                            $incore = true;
                            $pop = $n;
                        }
                    }
                }
                if($incore) {
                    if (sizeof($add->getDefinites())) {
                        foreach($add->getDefinites() as $def) {
                            if ($def == $app["bundleIdentifier"]) {
                                $isdef = true;
                            }
                        }
                    }
                }
                if ($incore && $isdef) {
                    unset($coreapps[$pop]);
                    array_push($coreapps, $app);
                } else if (!$incore){
                    array_push($coreapps, $app);
                }
            } else {
                array_push($coreapps, $app);
            }
        }
        foreach ($add->getNews() as $news) {
            $incore = false;
            $isdef = false;
            $islatest = false;
            $pop;
            if (sizeof($corenews)) {
                foreach($corenews as $n => $core) {
                    if($core["appID"] == $news["appID"]) {
                        $incore = true;
                        $pop = $n;
                        if (strtotime($news["date"]) > strtotime($core["date"]))
                            $islatest = true;
                    }
                }
                if($incore) {
                    if (sizeof($add->getDefinites())) {
                        foreach($add->getDefinites() as $def) {
                            if ($def == $news["appID"]) {
                                $isdef = true;
                            }
                        }
                    }
                }
                if ($incore && $isdef && $islatest) {
                    unset($corenews[$pop]);
                    array_push($corewnews, $news);
                } if (!$incore) {
                    array_push($corenews, $news);
                }
            } else {
                array_push($corenews, $news);
            }
        }
    }
}