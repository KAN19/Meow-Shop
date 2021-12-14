<?php
namespace App\Helper;

class CartHelper 
{
    public $items = [];
    public $total_quantity = 0; 
    public $total_price = 0; 

    public function __construct() {
        $this->items = session('cart') ? session('cart') : [];
        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();
    }

    public function add($product, $quantity = 1)
    {   
        $finalPrice = $product->price;

        if ($product->discount > 0 ) {
            $finalPrice = $product->price - $product->price * $product->discount; 
        }

        $item = [
            'id' => $product->id,
            'slug' => $product->slug,
            'name' => $product->name,
            'price' => $product->price, 
            'discount' => $product->discount, 
            'finalPrice' => $finalPrice, 
            'image' => $product->image,
        'quantity' => $quantity,
        ];

        if (isset($this->items[$product->id])) { 
            $this->items[$product->id]['quantity'] += $quantity; 
        } else {
            $this->items[$product->id] = $item;
        }
        
        session(['cart' => $this->items]); 
    }
    
    public function remove($id)
    {
        if (isset($this->items[$id])) { 
            unset($this->items[$id]) ; 
        }

        session(['cart' => $this->items]); 
    }

    public function update($id, $quantity = 1)
    {
        if (isset($this->items[$id])) { 
            $this->items[$id]['quantity'] = $quantity; 
        }

        session(['cart' => $this->items]); 
    }

    public function clear()
    {
        session(['cart' => '']); 
        
    }


    private function get_total_price() {
        $result = 0; 

        foreach ($this->items as $item) {
            $result += $item['finalPrice'] * $item['quantity']; 
        }
        
        return $result;
    }

    private function get_total_quantity() {
        $result = 0; 
        foreach ($this->items as $item) {
            $result += $item['quantity']; 
        }
        return $result;
    }

}

?>