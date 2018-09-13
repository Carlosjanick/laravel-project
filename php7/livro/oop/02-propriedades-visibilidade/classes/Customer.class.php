<?php

class Customer {
	private $id;
	private $firstname;
	private $surname;
	private $email;

	/**
	 * [__construct construtor da classe para inicializar o objeto com os dados]
	 * @param int    $id        [id do cliente]
	 * @param string $firstname [primeiro nome do cliente]
	 * @param string $surname   [segundo nome do cliente]
	 * @param string $email     [email do cliente]
	 */
	public function __construct(int $id, string $firstname, string $surname, string $email){
		$this->id          = $id;
		$this->firstname  = $firstname;
		$this->surname     = $surname;
		$this->email       = $email;
	}
}
