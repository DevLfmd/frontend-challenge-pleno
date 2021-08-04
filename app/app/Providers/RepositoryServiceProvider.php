<?php 

namespace App\Providers; 

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\ServiceRepositoryInterface; 
use App\Repository\DeveloperRepositoryInterface; 
use App\Repository\Eloquent\ServiceRepository; 
use App\Repository\Eloquent\DeveloperRepository; 
use App\Repository\Eloquent\BaseRepository; 
use Illuminate\Support\ServiceProvider; 

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider 
{ 
   /** 
    * Register services. 
    * 
    * @return void  
    */ 
   public function register() 
    { 
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(DeveloperRepositoryInterface::class, DeveloperRepository::class);
        
    }
}
