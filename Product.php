<?php
class Product {
    public $id;
	public $name;
	public $price;
    
    public function __construct($id, $name, $price) {
        $this->id=$id;
		$this->name=$name;
		$this->price=$price;
    }

    public function getFormattedPrice($price){
	  return number_format((float)$price, 2, '.', '');
	}

    public function showDetails(){
	 echo "ID: ".$this->id."\n";
	 echo "Name: ".$this->name."\n";
	 echo "Price: $".$this->getFormattedPrice($this->price);
	}
}
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>