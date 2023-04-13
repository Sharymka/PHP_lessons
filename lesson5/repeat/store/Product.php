<?php

namespace repeat\store;

use Cassandra\Date;
use http\Encoding\Stream\Inflate;

class Product
{

    public string $title;
    public float $price;
    public string $id;
    public array $components;



    function __construct(string $title, float $price) {
        $this->title = $title;
        $this->price = $price;
        $this->components = [];
        $this->id = uniqid();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function addComponents(Product $component): void
    {
        $this->components[] = $component;
        $this->price += $component->getPrice();
    }


}

