<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Broadcast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "broadcast";

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}
}