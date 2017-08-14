<?php 
namespace HskyZhou\Umeng\Implement\Android;

use HskyZhou\Umeng\Pusher\AndroidPusher;

class Listcast extends AndroidPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "listcast";
		$this->data["device_tokens"] = NULL;

		$this->initPreDefined($predefined);
		$this->initExtraField($extraField);
	}
}