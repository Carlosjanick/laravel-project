<?php

namespace classes;  //pasta onde ele encontra (pasta)

class Customer {

    private $id;
    private $firstname;
    private $surname;
    private $email;
    private static $lastId = 0;

    public function __construct($id, string $firstname, string $surname, string $email) {
        $this->setLastId($id);
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    /**
     * função que verifica o id no caso de nao informar informa um ultimo id atribuido incrimentado + 1
     */
    public function setLastId( int $id) {
        if($id == null ){
            /**
             * [$this->id se nao informar o id o id recebera o ultimo id incrementado antes ex. 10 foi ultimo atribuido incrementa + 1 antes de atribuir]
             * @var [int]
             */
            $this->id = ++self::$lastId;
        }else{
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }

        }
    }

    public function getId(): id {
        return $this->id;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public static function getLastId(): int {
        return self::$lastId;
    }

}
