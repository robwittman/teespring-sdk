<?php

namespace Teespring;

use Teespring\Http\Client;

class Auth {
    public static function getToken($args) {
        $client = new Client();

        $res = $client->call("v1/auth-tokens", "POST", $args);

        return $res;
    }
}
