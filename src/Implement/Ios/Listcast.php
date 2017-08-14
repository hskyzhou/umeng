<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Listcast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "listcast";
		$this->data["device_tokens"] = NULL;

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}
}