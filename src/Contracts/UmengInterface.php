<?php 

namespace HskyZhou\Umeng\Contracts;

interface UmengInterface
{
	/**
	 * 消息发送
	 */
	public function send();

	/**
	 * 任务状态查询
	 */
	public function taskStatus();

	/**
	 * 任务取消
	 */
	public function taskCancel();

	/**
	 * 文件上传 
	 */
	public function upload();
}