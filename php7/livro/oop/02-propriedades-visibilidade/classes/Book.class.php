<?php

class Book {
    /* ======================================================= */
    /* ====================Atributos============================ */
    /* ======================================================= */

    private  $isbn;
    private  $title;
    private  $author;
    private  $available;

    /* ======================================================= */
    /* ====================Construtor============================ */
    /* ======================================================= */

    /**
     * [__construct construtor da classe inicializa o objeto com os dados]
     * @param int         $isbn      [recebe o isbn do livro]
     * @param string      $title     [Titulo do livro]
     * @param string      $author    [autor do livro]
     * @param int|integer $available [recebe a quantidade do livro]
     */
    public function __construct(int $isbn, string $title, string $author, int $available = 0) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    /* ======================================================= */
    /* ====================Medodos============================ */
    /* ======================================================= */

    public function getPrintableTitle(): string {
        $result = '<i>' . $this->title . '</i> - ' . $this->author;

        if (!$this->available) {
            $result .= '<b> Not available</b>';
        }

        return $result;
    }

    public function getCopy(): bool {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }

    /* ======================================================= */
    /* ====================Medodos Magicos==================== */
    /* ======================================================= */
    public function __toString(){
           $result = '<i>' . $this->title . '</i> ' . $this->author;

           if(!$this->available){
                $result .= '<b> Not available.</b>';
           }

           return $result;
    }


}
