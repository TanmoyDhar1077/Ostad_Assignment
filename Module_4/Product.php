<?php
class Product{
    /* Adding Properties */
    private $id, $name, $price; 
    
    public function __construct($id, $name, $price) {
        /* Initializing properties */
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }

    /* adding getFormattedPrice method */
    function getFormattedPrice(){
        return '$'.number_format($this->price, 2); /* Returning the price upto 2 decimal point */
    }

    /* Adding showDetails method */
    function showDetails(){
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}";
        echo "\n";
    }
}

/* Testing the Product class */
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

?>