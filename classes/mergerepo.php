<?php
class MergeRepo {
    public static function merge_repo(&$coreapps, &$corenews, $add) {
        foreach ($add->getApps() as $app) {
            if (sizeof($coreapps)) {
                foreach($coreapps as $check) {
                    if ($check->$name == $app->$name) {
                        foreach ($add->$definites as $identifier) {
                            if ($identifier == $app->$identifier) {
                                unset($check);
                                array_push($coreapps, $app);
                            }
                        } 
                    } else {
                        array_push($coreapps, $app);
                    }
                }
            } else {
                array_push($coreapps, $app);
            }
        }
        foreach ($add->getNews() as $news) {
            if (sizeof($corenews)) {
                foreach($corenews as $check) {
                    if ($check->$name == $news->$name) {
                        foreach ($add->$definites as $identifier) {
                            if ($identifier == $news->$identifier) {
                                unset($check);
                                array_push($corenews, $news);
                            }
                        }
                    } else {
                        array_push($corenews, $news);
                    }
                }
            } else {
                array_push($corenews, $news);
            }
        }
    }
}