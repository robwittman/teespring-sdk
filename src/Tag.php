<?php

namespace Teespring;

class Tag {
    const URL = 'tags';

    public static function all(array $params = array()) {
        $res = Api::getClient()->call(Tag::URL, "GET", $params);
        return $res->tags;
    }

    public static function find($id) {
        $res = Api::getClient()->call(Tag::URL.'/'.$id, "GET");
        return $res->tag;
    }
}
