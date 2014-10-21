<?php
/**
 * Created by PhpStorm.
 * User: Jiakuan
 * Date: 10/20/14
 * Time: 4:41 PM
 */
require_once("../connect.php");
require_once("../inc/class/User.php");
//$USER = new User($_SESSION['username']);
define("doNotReply", "\n\n\n\n\n这封邮件是由系统自动发送,请不要回复");

class Email
{
	/*
	 * 给特定用户发邮件
	 * @author: Jiakuan
	 * @date: 10/20/2014
	 */
	function sendEmailTo($recipient, $subject, $message)
	{
		$content = $message . doNotReply;
		mail($recipient, $subject, $content);
	}

	/*
	 * 给所有管理员发邮件
	 * @author: Jiakuan
	 * @date: 10/20/2014
	 */
	function sendEmailToAdmin($subject, $message)
	{
		$USER = new User($_SESSION['username']);
		$content = $message . doNotReply;
		$recipient = $USER->getAdminEmail();

		for ($i = 0; $i < count($recipient); $i++) {
			mail($recipient[$i], $subject, $content);
		}
	}

	/*
	 * 给所有PR发邮件
	 * @author: Jiakuan
	 * @date: 10/20/2014
	 */
	function sendEmailToPR($subject, $message)
	{
		$USER = new User($_SESSION['username']);
		$content = $message . doNotReply;
		$recipient = $USER->getPREmail();

		for ($i = 0; $i < count($recipient); $i++) {
			mail($recipient[$i], $subject, $content);
		}
	}

	/*
	 * 给所有审稿人发邮件
	 * @author: Jiakuan
	 * @date: 10/20/2014
	 */
	function sendEmailToReviewer($subject, $message)
	{
		$USER = new User($_SESSION['username']);
		$content = $message . doNotReply;
		$recipient = $USER->getReviewerEmail();

		for ($i = 0; $i < count($recipient); $i++) {
			mail($recipient[$i], $subject, $content);
		}
	}

	/*
	 * 给所有人发邮件
	 * @author: Jiakuan
	 * @date: 10/20/2014
	 */
	function sendEmailToEveryone($subject, $message)
	{
		$USER = new User($_SESSION['username']);
		$content = $message . doNotReply;
		$recipient = $USER->getEmail();

		for ($i = 0; $i < count($recipient); $i++) {
			mail($recipient[$i], $subject, $content);
		}
	}
} 