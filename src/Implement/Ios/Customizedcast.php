<?php 
namespace HskyZhou\Umeng\Implement\Ios;

use HskyZhou\Umeng\Pusher\IosPusher;

class Customizedcast extends IosPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "customizedcast";
		$this->data["alias_type"] = NULL;

		$this->initPreDefined($predefined);
		$this->initCustomizedField($extraField);
	}

	function isComplete() {
		parent::isComplete();
		if (!array_key_exists("alias", $this->data) && !array_key_exists("file_id", $this->data))
			throw new Exception("You need to set alias or upload file for customizedcast!");
	}
}