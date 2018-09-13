<?php

namespace classes\pai;

class Person {

    protected $Firstname;
    protected $Surname;

    function __construct(string $Firstname, string $Surname) {
        $this->Firstname = $Firstname;
        $this->Surname = $Surname;
    }

    public function getFirstname(): string {
        return $this->Firstname;
    }

    public function getSurname(): string {
        return $this->Surname;
    }

}
