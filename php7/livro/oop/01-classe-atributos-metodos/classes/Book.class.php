<?php

class Book {
    /* ======================================================= */
    /* ====================Atributos============================ */
    /* ======================================================= */

    public  $isbn;
    public  $title;
    public  $author;
    public  $available;


    /* ======================================================= */
    /* ====================Construtor============================ */
    /* ======================================================= */

     /**
     * Class Constructor
     * @param    $isbn   
     * @param    $title   
     * @param    $author   
     * @param    $available   
     */
    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    

    /* ======================================================= */
    /* ====================Medodos============================ */
    /* ======================================================= */

    /**
     * [getPrintableTitle faz o print na tela]
     * @return [type] [string]
     */
    public function getPrintableTitle(): string {
        $result = '<i>' . $this->title . '</i> - ' . $this->author;

        if (!$this->available) {
            $result .= '<b> Not available</b>';
        }

        return $result;
    }

    /**
     * [getCopy Faz a avaliação se existe o livre decrementa e se nao envia uma mensagem]
     * @return [type] [boolean]
     */
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

    /**
     * [__toString metodo magico executado ao dar print no objeto]
     * @return string [string]
     */
    public function __toString(){
           $result = '<i>' . $this->title . '</i> ' . $this->author;

           if(!$this->available){
                $result .= '<b> Not available.</b>';
           }

           return $result;
    }

}
