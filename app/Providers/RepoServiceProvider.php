<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Log;
/**
 * 
 */
class RepoServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    
	}


	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{ 
		$models = array(
		           'Products',
		       );

		       foreach ($models as $model) {
		           $this->app->bind("App\Repositories\\{$model}\\{$model}Interface", "App\Services\\{$model}\\{$model}Service"); 
		           $this->app->bind("App\Repositories\\{$model}\\{$model}Interface", "App\Repositories\\{$model}\\{$model}Repository");
		       }
	}
}


 ?>