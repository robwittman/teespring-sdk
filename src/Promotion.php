<?php

namespace Teespring;

class Promotion {
    const URL = 'seller/v1/promotions';

    public static function all(array $params = array()) {
        $res = Api::getClient()->call(Promotion::URL, "GET", $params);
        return $res->promotions;
    }
}
