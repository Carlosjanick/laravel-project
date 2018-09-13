<?php

namespace classes\utils;

trait Unique {

    private static $lastId = 0;
    protected $id;

    public function setId($id) {
        try {
            if ($id < 0) {
                throw new Exception('Id não pode ser negativo.');
            }

            if (empty($id)) {
                $this->id = ++self::$lastId;
            } else {
                $this->id = $id;
                if ($id > self::$lastId) {
                    self::$lastId = $id;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getLastId(): int {
        return self::$lastId;
    }

    public function getId(): int {
        return $this->id;
    }

}
