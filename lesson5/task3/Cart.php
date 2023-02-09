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
            $this->cartProducts[$product->getTitle()] = $product;
            $product->setCount(1);
        } else {
            $product->setCount($product->getCount() + 1);
        }

 }

    public function delete(Product $product) {
        if(!in_array($product, $this->cartProducts)) {
            return;
        }

        if(in_array($product, $this->cartProducts) && $product->getCount() === 1) {
            unset($this->cartProducts[$product->getTitle()]);
        } else {
            $product->setCount($product->getCount() - 1);
        }
    }


    public function countTotalPrice() {
        foreach ($this->cartProducts as $key => $cartProduct) {
            $this->totalPrice += $cartProduct->getPrice();

                if(count($cartProduct->getComponents()) !== 0) {
                    $this->checkIsThereAny($cartProduct->getComponents());
                }
        }
    }

    public function  checkIsThereAny($components) {
        foreach ($components as $product) {
                $this->totalPrice += $product->getPrice();
                if(count($product->getComponents()) !== 0) {
                    $this->checkIsThereAny($product->getComponents());
                }
        }
    }




}
$product1 = new Product("Мышь", 2);
$product2 = new Product("Клавиатура", 2);
$product3 = new Product("Батарейки", 3);


$product1->addToComponents($product2);
$product1->addToComponents($product3);
$product1->addToComponents($product2);
$product1->addToComponents($product1);


$cart = new Cart();
$cart->add($product1);
$cart->add($product1);
$cart->add($product1);
//$cart->delete($product1);
//$cart->delete($product1);
//$cart->delete($product1);

print_r($cart->getCartProducts());
$cart->countTotalPrice();
print_r('Полная стоимость товаров = ' . $cart->getTotalPrice());