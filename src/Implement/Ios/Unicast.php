<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Unicast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "unicast";
		$this->data["device_tokens"] = NULL;

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}
}