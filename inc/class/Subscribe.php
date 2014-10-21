<?php
/**
 * Created by PhpStorm.
 * @author: Jiakuan
 * @Date: 10/17/14
 * Time: 5:09 PM
 */
require_once('../connect.php');

class Subscribe
{
	private $email;

	function __construct($email)
	{
		$this->email = $email;
	}

	/*
	 * 把订阅的邮件地址提交到数据库保存
	 * @author: Jiakuan
	 * @date: 10/17/2014
	 */
	function addToDB()
	{
		$sql = "INSERT INTO Subscribe(Email, Added) VALUES('$this->email', '0')";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 确认把邮件地址添加到订阅
	 * @author: Jiakuan
	 * @date: 10/17/2014
	 */
	function addToList()
	{
		$sql = "UPDATE Subscribe SET Added = '1' WHERE Email = '$this->email'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 把邮件订阅取出,仍然保留在数据库
	 * @author: Jiakuan
	 * @date: 10/17/2014
	 */
	function removeFromList()
	{
		$sql = "UPDATE Subscribe SET Added = '0' WHERE Email = '$this->email'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 把邮件订阅从数据库中删除
	 * @author: Jiakuan
	 * @date: 10/17/2014
	 */
	function removeFormDB()
	{
		$sql = "DELETE FROM Subscribe WHERE Email = '$this->email'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 查询数据库中是否有重复的邮件地址存在
	 * @author: Jiakuan
	 * @date: 10/17/2014
	 */
	function duplicate($email)
	{
		$sql = "SELECT * FROM Subscribe WHERE Email = '$email'";
		$query = mysql_query($sql);
		if (mysql_num_rows($query) == 0) {
			return false;
		} else {
			return true;
		}
	}
}