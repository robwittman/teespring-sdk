<?php

namespace Teespring;

class Campaign {
    const URL = 'campaigns';

    public static function all(array $params = array()) {
        $url = Campaign::URL;
        $res = Api::getClient()->call($url, "GET", $params);
        return $res->campaigns;
    }

    public static function find() {

    }
}
