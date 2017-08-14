<?php 
namespace HskyZhou\Umeng\Implement\Android;

use HskyZhou\Umeng\Pusher\AndroidPusher;

class Filecast extends AndroidPusher
{
	public function __construct($predefined = [], $extraField = [])
	{
		parent::__construct();
		$this->data['type'] = "filecast";
		$this->data["file_id"] = NULL;

		$this->initPreDefined($predefined);
		$this->initExtraField($extraField);
	}
}