<?php

namespace Teespring;

class Webhook {
    const URL = 'v1/webhooks';

    public static function all(array $params = array()) {
        $url = Webhook::URL;
        $res = Api::getClient()->call($url, "GET", $params);
        return $res->webhooks;
    }

    public static function find($token) {
        $url = Webhook::URL.'/'.$token;
        $res = Api::getClient()->call($url, 'GET');
        return $res;
    }

    public static function create(array $params = array()) {
        $url = Webhook::URL;
        $res = Api::getClient()->call($url, "POST", $params);
        return $res;
    }

    public static function delete() {
        $url = Webhook::URL.'/'.$token;
        $res = Api::getClient()->call($url, "DELETE", $params);
        return $res;
    }
}
