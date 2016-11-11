<?php

namespace Teespring\Http;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Psr7\Request as Request;

use Teespring\Exception\InvalidHttpMethodException;

class Client {

    protected $handle;

    public function __construct($token = null) {
        $this->handle = new Guzzle([
            'base_uri' => \Teespring\Api::API_ROOT,
            'query' => [
                'access_token' => $token
            ]
        ]);
    }

    public function call($url, $method = 'GET', array $params = array()) {

        $params = array_merge(
            $this->handle->getConfig('query'),
            $params
        );
        $response = $this->handle->request($method, $url, [
            'query' => $params
        ]);
        return json_decode($response->getBody());
    }
}
