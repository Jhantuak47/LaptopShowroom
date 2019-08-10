<?php 

namespace App\Repositories\Products;

interface ProductsInterface{

	public function getProducts($fields, $method);
	public function getProductsWithDetail();
	public function getProductsTemplate($products);
}

?>