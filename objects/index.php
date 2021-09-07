<?php 

require_once('Printer.php');

class ShopProduct {

    public $title;
    public $price;
    public static $num_items = 0;

    function __construct($title="ShopProduct", $price=0) {
        $this->title = $title;
        $this->price = $price;
        self::$num_items++;
    }

    public static function getAll() {
        return self::$num_items;
    }

}


class Laptop extends ShopProduct {
    public $screen_size;

    public function __construct($title="ShopProduct", $price=0, $screen_size) 
    {
        parent::__construct($title, $price);
        $this->screen_size = $screen_size;
    }
}

$laptop = new Laptop("Lenovo Y700", 55000, 14);

echo ShopProduct::getAll();



?>