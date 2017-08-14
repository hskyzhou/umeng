<?php 
namespace HskyZhou\Umeng;

class AppNotification
{
	protected $android;
	protected $ios;

	public function __construct()
	{
		$this->android = new AndroidNotification();
		$this->ios = new IosNotification();
	}

	public function android()
	{
		return $this->android;
	}

	public function ios()
	{
		return $this->ios;
	}
}