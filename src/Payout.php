<?php

namespace Teespring;

class Payout {
    const URL = 'seller/v1/payouts';

    public static function all(array $params = array()) {
        $res = Api::getClient()->call(Payout::URL, "GET", $params);
        return $res->payouts;
    }
}
