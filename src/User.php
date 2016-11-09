<?php

namespace Teespring;

class User {
    public static function me() {
        return Api::getClient()->call("/me", "GET")->users[0];
    }
}
