<?php

class Movie
{
    public const CHILDRENS = 2;
    public const REGULAR = 0;
    public const NEW_RELEASE = 1;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $priceCode;

    public function __construct(string $title, int $priceCode)
    {
        $this->title = $title;
        $this->priceCode = $priceCode;
    }
}