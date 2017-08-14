<?php 

namespace HskyZhou\Umeng\Facades;

use Illuminate\Support\Facades\Facade;

class AppNotificationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
    	return 'appnotification'; 
    }
}