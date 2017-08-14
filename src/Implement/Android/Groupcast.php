<?php 
namespace HskyZhou\Umeng\Implement\Android;

use HskyZhou\Umeng\Pusher\AndroidPusher;

class Groupcast extends AndroidPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "groupcast";
		$this->data["filter"] = NULL;

		$this->initPreDefined($predefined);
		$this->initExtraField($extraField);
	}
}