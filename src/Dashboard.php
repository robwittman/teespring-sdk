<?php

namespace Teespring;

class Dashboard {
    public static function fetch() {
        $res = Api::getClient()->call('seller/v1/dashboard', 'GET');
        return $res->dashboard_stats;
    }
}
