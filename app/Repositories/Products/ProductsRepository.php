<?php 

namespace App\Repositories\Products;

use App\Repositories\Products\ProductsInterface as ProductsInterface;
use App\Models\Product as ProductModel;

class ProductsRepository implements ProductsInterface{

	public $products;

	function __construct(ProductModel $products){
		$this->products = $products;
	}

	public function getProducts($fields, $method){

		return ProductModel::order($fields, $method)->get();
	}
	public function getProductsWithDetail(){

		return ProductModel::with([ 'brand', 'category'])
				->orderBy('created_at')->get();
	}
	public function getProductsTemplate($products){

				$data = '';
				foreach ($products as $product) {
					$img_url = !$product->images->isEmpty()?$product->images->first()->img_url:'no_image.jpg';
					$img_path = \URL::asset('public/storage/admin/images/'.$img_url);
					$data .= '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				            	            			<div class="my-list">
				            	            				<img src="'. $img_path .'" alt="dsadas" />
				            	            				<h3>'. $product->p_name .'</h3>
				            	            				<span>RS:'. $product->price .'</span>
				            	            				<span class="p-30">Brand:'. $product->brand->b_name .'</span>
				            	            				<div class="offer">Extra 5% Off. Cart value Rs 500</div>
				            	            				<div class="detail">
				            	            				<p>'. $product->Description .'</p>
				            	            				<img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
				            	            				<a href="#" class="btn btn-info">Add To Cart</a>
				            	            				<a href="#" class="btn btn-info">Deatil</a>
				            	            				</div>
				            	            			</div>
				            	            			</div>';
				}

				return $data;

	}
}


?>