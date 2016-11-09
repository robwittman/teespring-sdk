<?php

namespace Teespring;

class Order {
    const URL = 'seller/v1/orders';

    public static function all($params) {
        $url = Order::URL;
        $res = Api::getClient()->call($url, "GET", $params);
        $list = [];
        foreach($res->orders as $order) {
            $list[] = new Order($order);
        }
        return $list;
    }

    public function __construct($data) {
        foreach($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
