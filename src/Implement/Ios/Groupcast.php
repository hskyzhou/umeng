<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Groupcast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "groupcast";
		$this->data["filter"] = NULL;

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}
}