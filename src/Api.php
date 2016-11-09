<?php

namespace Teespring;

use Teespring\Http\Client;

class Api {

    /**
     * API Version
     */
    const VERSION = 'v1';

    /**
     * API Root
     */
    const API_ROOT = 'https://api.teespring.com';

    protected $client;

    protected static $instance;

    public static function init($access_token) {
        $client = new Client($access_token);
        $api = new self($client);
        self::setInstance($api);
    }

    public static function getClient() {
        return self::instance()->client;
    }
    public static function instance() {
        return self::$instance;
    }

    public static function setInstance($instance) {
        self::$instance = $instance;
    }

    private function __construct($client) {
        $this->client = $client;
    }
}
