<?php

require 'Product.php';
class Cart
{
    private array $cartProducts;

    private float $totalPrice;

    function __construct(){
        $this->cartProducts = [];
        $this->totalPrice = 0;
    }

    /**
     * @return array
     */
    public function getCartProducts(): array
    {
        return $this->cartProducts;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function add(Product $product, int $count = 1) {
        // неправильно
        if(!in_array($product, $this->cartProducts)) {
            $this->cartProducts[$product->getTitle()] = array('product'=> $product, 'count'=> $count);
        } else {
            $this->cartProducts[$product->getTitle()]['count'] ++;
        }

 }

    public function delete(Product $product) {
       unset($this->cartProducts[$product->getTitle()]);
    }


    public function countTotalPrice() {
        foreach ($this->cartProducts as $key => $cartProduct) {
            $this->checkIsArray($cartProduct);

        }
    }

    public function  checkIsArray($cartProduct) {
        foreach ($cartProduct as $key => $product) {
            if(is_object($product)) {
                $this->totalPrice += $product->getPrice();
                if(count($product->getComponents()) !== 0) {
                    $this->checkIsArray($product->getComponents());
                }
            }

        }
    }




}
$product1 = new Product("Мышь", 1);
$product2 = new Product("Клавиатура", 2);
$product3 = new Product("Батарейки", 3);


$product1->addToComponents($product2);
$product1->addToComponents($product3);
$product1->addToComponents($product2);
$product1->addToComponents($product1);

$cart = new Cart();
$cart->add($product1);
print_r($cart->getCartProducts());
$cart->countTotalPrice();
print_r($cart->getTotalPrice());