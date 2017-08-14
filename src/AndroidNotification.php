<?php 
namespace HskyZhou\Umeng;

use HskyZhou\Umeng\Implement\Android\Unicast;
use HskyZhou\Umeng\Implement\Android\Listcast;
use HskyZhou\Umeng\Implement\Android\Groupcast;
use HskyZhou\Umeng\Implement\Android\Filecast;
use HskyZhou\Umeng\Implement\Android\Customizedcast;
use HskyZhou\Umeng\Implement\Android\Broadcast;

class AndroidNotification
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