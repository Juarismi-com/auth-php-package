<?php

namespace Juarismi\Auth;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Juarismi\Utils\Http\Middleware\Cors;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{

	public function boot(){
      $this->app->singleton('cors', function ($app) {
         return new Cors();
      });
      Schema::defaultStringLength(191);

	   $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
	   $this->registerRoutes();
   }

   public function register(){
   
   }

   protected function registerRoutes(){
      Route::group(['prefix' => 'api/v1'],function(){
    		$this->loadRoutesFrom(__DIR__.'/Routes/api.php', 'jAuth');
    	});
   }
}