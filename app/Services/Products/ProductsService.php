<?php
namespace App\Services\Products;

use App\Repositories\Products\ProductsInterface;

/**
 * 
 */
class ProductsService 
{
	
	protected $prodRepo;

	function __construct(ProductsInterface $prodRepo)
	{
		$this->prodRepo = $prodRepo;
	}

	/**
	 * Method to get Product Details
	 *
	 *
	 * @param mixed $user
	 * @return string
	 */

	public function getProducts($fields = 'added_date', $method = 'DSC'){
		return $this->prodRepo->getProducts($fields, $method);
	}
	public function getProductsWithDetail(){
		return $this->prodRepo->getProductsWithDetail();
	}
	public function getProductsTemplate($products){
		return $this->prodRepo->getProductsTemplate($products);
	}
}

?>