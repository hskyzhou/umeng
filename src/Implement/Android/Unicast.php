<?php 
namespace HskyZhou\Umeng\Implement\Android;

use HskyZhou\Umeng\Pusher\AndroidPusher;

class Unicast extends AndroidPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "unicast";
		$this->data["device_tokens"] = NULL;

		$this->initPreDefined($predefined);
		$this->initExtraField($extraField);
	}
}