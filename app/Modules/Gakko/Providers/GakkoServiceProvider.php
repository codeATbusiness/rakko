<?php
namespace App\Modules\Gakko\Providers;

use Illuminate\Support\ServiceProvider;

use App;
use Config;
use Lang;
use Menu;
use View;

class GakkoServiceProvider extends ServiceProvider
{
	/**
	 * Register the Gakko module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Gakko\Providers\RouteServiceProvider');
		App::register('App\Modules\Gakko\Providers\GakkoMenuProvider');

		$this->mergeConfigFrom(
			__DIR__.'/../Config/gakko.php', 'gakko'
		);

		$this->registerNamespaces();
	}

	/**
	 * Register the Gakko module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
//		Lang::addNamespace('gakko', __DIR__.'/../Resources/Lang/');
		View::addNamespace('gakko', __DIR__.'/../Resources/Views/');
	}

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../Config/gakko.php' => config_path('gakko.php'),
		]);
	}


}
