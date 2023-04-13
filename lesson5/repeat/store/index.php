<?php
use \repeat\store\Product;
use \repeat\store\CartProvider;
use \repeat\store\Cart;

require_once 'Product.php';
require_once 'Cart.php';
require_once 'CartProvider.php';

$product1 = new Product('Пинал', 32);
$product2 = new Product('Карандаш', 10);
$product3 = new Product('Ручка', 14);
$product1->addComponents($product2);
$product1->addComponents($product3);
$cart = new Cart();
CartProvider::addToCart($cart, $product1);
CartProvider::addToCart($cart, $product2);
CartProvider::addToCart($cart, $product3);
var_dump($cart->getCart());

CartProvider::deleteFromCart($cart, $product3);
echo "удаление \n";
var_dump($cart->getCart());
$price = CartProvider::getCartPrice($cart);
var_dump($price);