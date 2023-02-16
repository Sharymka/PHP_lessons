<?php


class Product
{
    private string $title;
    private float $price;

    private float $componentsPrice = 0;
    private array $components;
    private int $count;

    function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
        $this->count = 0;
        $this->components = [];

    }
    public function addToComponents(Product $product){
        if($this->title === $product->title) {
            return;
        }

        if (in_array($product, $this->components)) {
            return;
        }

        $this->components[] = $product;

        $this->componentsPrice($product->getPrice());
    }

    private function componentsPrice($price) {
        $this->componentsPrice += $price; 
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
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

}

$product1 = new Product("Мышь", 123);
$product2 = new Product("Клавиатура", 554);
$product3 = new Product("Батарейки", 554);


$product1->addToComponents($product2);
$product1->addToComponents($product3);
$product1->addToComponents($product2);
$product1->addToComponents($product1);
print_r(count($product1->getComponents()));
//var_dump($product1->getComponents());