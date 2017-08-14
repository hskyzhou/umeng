<?php 
namespace HskyZhou\Umeng;

use HskyZhou\Umeng\Implement\Ios\Unicast;
use HskyZhou\Umeng\Implement\Ios\Listcast;
use HskyZhou\Umeng\Implement\Ios\Groupcast;
use HskyZhou\Umeng\Implement\Ios\Filecast;
use HskyZhou\Umeng\Implement\Ios\Customizedcast;
use HskyZhou\Umeng\Implement\Ios\Broadcast;

class IosNotification
{
	public function unicast($predefined, $extraField)
	{
		return new Unicast($predefined, $extraField);
	}

	public function listcast($predefined, $extraField)
	{
		return new Unicast($predefined, $extraField);
	}

	public function groupcast($predefined, $extraField)
	{
		return new Groupcast($predefined, $extraField);
	}

	public function filecast($predefined, $extraField)
	{
		return new Filecast($predefined, $extraField);
	}

	public function customizedcast($predefined, $extraField)
	{
		return new Customizedcast($predefined, $extraField);
	}

	public function broadcast($predefined, $extraField)
	{
		return new Broadcast($predefined, $extraField);
	}
}