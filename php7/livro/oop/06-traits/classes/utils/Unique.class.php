<?php

namespace classes\utils;

trait Unique {

    private static $lastId = 0;
    protected $id;

    public function setId($id) {
        if ($id == null || empty($id)) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if ($this->id > self::$lastId) {
                self::$lastId = $this->id;
            }
        }
    }
    
    public static function getLastId() :int {
        return self::$lastId;
    }
    
    public function getId() : int{
        return $this->id;
    }

}
