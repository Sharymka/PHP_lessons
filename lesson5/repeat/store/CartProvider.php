<?php

namespace repeat\store;

class CartProvider
{
   static function addToCart(Cart $cart, Product $product) {
       $array = $cart->getCart();
       $array[] = $product;
       $cart->setCart($array);
   }

    static function deleteFromCart(Cart $cart, Product $product) {
        $array = $cart->getCart();
        foreach ($array as $key => $good){
            if($good->getId() === $product->getId()){
                unset($array[$key]);
            }
        }
        $cart->setCart($array);

    }

   static function getCartPrice(Cart $cart): float{
       $price = 0;
       if(count($cart->getCart())!== 0) {
           echo 'ЗАшли';
           foreach ($cart->getCart() as $product){
               $price += $product->getPrice();
           }
           return $price;
       }
     return 0;
   }
}