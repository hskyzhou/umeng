<?php 
namespace HskyZhou\Umeng\Implement\Android;

use HskyZhou\Umeng\Pusher\AndroidPusher;

class Customizedcast extends AndroidPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "customizedcast";
		$this->data["alias_type"] = NULL;

		$this->initPreDefined($predefined);
		$this->initExtraField($extraField);
	}

	function isComplete() {
		parent::isComplete();
		if (!array_key_exists("alias", $this->data) && !array_key_exists("file_id", $this->data))
			throw new Exception("You need to set alias or upload file for customizedcast!");
	}
}