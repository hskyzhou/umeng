<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Filecast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "filecast";
		$this->data["file_id"] = NULL;

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}
}