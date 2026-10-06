<?php

class Cart{

    public $nbreProduit=2;

    public function addProduct(): string{
        return "L'article a ete bien ajoute";
    }

    public function removeProduit(): string{
        return "L'article a bien ete supprimé";
    }


}

$cart = new Cart;
echo "<pre>";
var_dump($cart);
echo "</pre>";

echo "<pre>";
var_dump(get_class_methods($cart));
echo "</pre>";

echo $cart->addProduct(). "</br>";
echo $cart->nbreProduit;




?>
