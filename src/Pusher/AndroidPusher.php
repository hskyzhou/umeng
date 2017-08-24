<?php 
namespace HskyZhou\Umeng\Pusher;

use HskyZhou\Umeng\Contracts\PusherContract;

use Exception;

class AndroidPusher extends Pusher implements PusherContract
{
	// The array for payload, please see API doc for more information
	protected $androidPayload = [
		"display_type"  =>  "notification",
		"body"         	=>  array(
			"ticker"       =>   NULL,
			"title"        => NULL,
			"text"         => NULL,
			//"icon"       => "xx", 
			//largeIcon    => "xx",
			"play_vibrate" => "true", 
			"play_lights"  => "true",
			"play_sound"   => "true",
			"after_open"   => NULL,
			//"url"        => "xx",
			//"activity"   => "xx",
			//custom       => "xx"
		),
		//"extra"       => array("key1" => "value1", "key2" => "value2")
	];
	
	// Keys can be set in the payload level
	protected $PAYLOAD_KEYS = [
		"display_type"
	];

	// Keys can be set in the body level
	protected $BODY_KEYS    = [
		"ticker", 
		"title", 
		"text", 
		"builder_id", 
		"icon", 
		"largeIcon", 
		"img", 
		"play_vibrate", 
		"play_lights", 
		"play_sound", 
		"after_open", 
		"url", 
		"activity", 
		"custom"
	];

	public function __construct() {
		parent::__construct();
		$this->data["payload"] = $this->androidPayload;

		/*设置配置*/
		$configArr = config('umeng.android');

		$this->setAppMasterSecret($configArr['app_master_secret']);

		$this->data['appkey'] = $configArr['app_key'];
		$this->data['timestamp'] = strval(time());
	}

	// Set key/value for $data array, for the keys which can be set please see $DATA_KEYS, $PAYLOAD_KEYS, $BODY_KEYS, $POLICY_KEYS
	public function setPredefinedKeyValue($key, $value) {
		if (!is_string($key))
			throw new Exception("key should be a string!");

		if (in_array($key, $this->DATA_KEYS)) {
			$this->data[$key] = $value;
		} else if (in_array($key, $this->PAYLOAD_KEYS)) {
			$this->data["payload"][$key] = $value;
			if ($key == "display_type" && $value == "message") {
				$this->data["payload"]["body"]["ticker"] = "";
				$this->data["payload"]["body"]["title"] = "";
				$this->data["payload"]["body"]["text"] = "";
				$this->data["payload"]["body"]["after_open"] = "";
				if (!array_key_exists("custom", $this->data["payload"]["body"])) {
					$this->data["payload"]["body"]["custom"] = NULL;
				}
			}
		} else if (in_array($key, $this->BODY_KEYS)) {
			$this->data["payload"]["body"][$key] = $value;
			if ($key == "after_open" && $value == "go_custom" && !array_key_exists("custom", $this->data["payload"]["body"])) {
				$this->data["payload"]["body"]["custom"] = NULL;
			}
		} else if (in_array($key, $this->POLICY_KEYS)) {
			$this->data["policy"][$key] = $value;
		} else {
			if ($key == "payload" || $key == "body" || $key == "policy" || $key == "extra") {
				throw new Exception("You don't need to set value for ${key} , just set values for the sub keys in it.");
			} else {
				throw new Exception("Unknown key: ${key}");
			}
		}
	}

	// Set extra key/value for Android notification
	function setExtraField($key, $value) {
		if (!is_string($key))
			throw new Exception("key should be a string!");
		$this->data["payload"]["extra"][$key] = $value;
	}

	/*初始化 额外值*/
	public function initExtraField($arr)
	{
		if(is_array($arr) && $arr){
			foreach($arr as $key => $value){
				$this->setExtraField($key, $value);
			}
		}
	}
}