<?php namespace Extensions;

use Illuminate\Support\ServiceProvider;

class ExtensionsServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->registerCarved();
	}
	
	public function registerCarved(){
		$this->app['api'] = $this->app->share(function($app)
		{	
			return new \Extensions\Carved\Api;
		});
	}

}

