<?php

namespace repeat\store;

class Cart
{
private array $cart;

    /**
     * @param array $cart
     */
    public function setCart(array $cart): void
    {
        $this->cart = $cart;
    }

    function __construct() {
        $this->cart = [];
    }

    /**
     * @return array
     */
    public function getCart(): array
    {
        return $this->cart;
    }

    /**
     * @param array $cart
     */
    public function addToCart(Product $product): void
    {
        $this->cart[] = $product;
    }

}