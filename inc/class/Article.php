<?php

/**
 * 文章类.
 * User: Jiakuan
 * Date: 10/19/14
 * Time: 1:35 PM
 */
class Article
{

	/*
	 * 增加文章到数据库
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章标题,作者, 内容,时间
	 */
	function addArticle($title, $author, $authorUsername, $content, $dateline)
	{
		$sql = "INSERT INTO Article(title, author, authorUsername, content, dateline, isRelease) VALUES('$title','$author', '$authorUsername','$content', '$dateline', '0')";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 获得文章内容
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章id
	 */
	function getContent($id)
	{
		$sql = "SELECT * From Article WHERE id = '$id'";
		$query = mysql_query($sql);
		$result = mysql_fetch_assoc($query);
		return $result['content'];
	}

	/*
	 * 获取文章标题
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章id
	 */
	function getTitle($id)
	{
		$sql = "SELECT * From Article WHERE id = '$id'";
		$query = mysql_query($sql);
		$result = mysql_fetch_assoc($query);
		return $result['title'];
	}

	/*
	 * 获取文章作者
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章id
	 */
	function getAuthor($id)
	{
		$sql = "SELECT * From Article WHERE id = '$id'";
		$query = mysql_query($sql);
		$result = mysql_fetch_assoc($query);
		return $result['author'];
	}

	/*
	 * 获取文章作者的用户名
	 * @author: Jiakuan
	 * @date: 10/20/14
	 * @param: id
	 */
	function getAuthorUsername($id)
	{
		$sql = "SELECT * From Article WHERE id = '$id'";
		$query = mysql_query($sql);
		$result = mysql_fetch_assoc($query);
		return $result['authorUsername'];
	}

	/*
	 * 发布文章到网页
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章id, 审稿人账号
	 */
	function releaseArticle($id, $reviewer)
	{
		$sql = "UPDATE Article SET isRelease = '1', Reviewer ='$reviewer' WHERE id = '$id'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 取消发布文章
	 * @author: Jiakuan
	 * @date :10/19/14
	 * @param: 文章id
	 */
	function unreleaseArticle($id)
	{
		$sql = "UPDATE Article SET isRelease = '0', Reviewer = '' WHERE id = $id";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 从数据库中删除文章
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章id
	 */
	function deleteArticle($id)
	{
		$sql = "DELETE FROM Article WHERE id = '$id'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	/*
	 * 更新文章数据
	 * @author: Jiakuan
	 * @date: 10/19/14
	 * @param: 文章标题, 文章作者, 文章内容, 时间, id
	 */
	function updateArticle($title, $author, $content, $dateline, $id)
	{
		$sql = "UPDATE Article SET title = '$title', author = '$author', content = '$content', dateline = '$dateline' WHERE id = '$id'";
		$query = mysql_query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
}