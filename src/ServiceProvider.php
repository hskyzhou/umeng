<?php 

namespace HskyZhou\Umeng;

/**
 * ServiceProvider
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	
	/**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;	

    public function boot()
    {
    	/*配置文件*/
    	$this->publishes([
    		__DIR__ . '/../config/umeng.php' => config_path('umeng.php'),
    	], 'config');
    }

    /* bind Service container*/
    public function register()
    {
    	$this->mergeConfig();
    }

    protected function mergeConfig()
    {
    	$this->mergeConfigFrom(__DIR__ . '/../config/umeng.php', 'umeng');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}