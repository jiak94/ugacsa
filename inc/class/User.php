<?php
/**
 * @author: Jiakuan
 * Date: 10/16/14
 * Time: 10:26 AM
 */
require_once("../connect.php");
class User {
    private $username;
    private $isAdmin;
    private $isPR;
    private $isReviewer;


    /*
     * 类的构造函数
     * @author Jiakuan
     * @date: 10/16/14
     * @param: 用户权限, 是否管理员, 是否是PR部门人员, 是否审稿人
     */
    function __construct($name){
        $this->username = $name;
        $sql ="SELECT * FROM Admin WHERE Username='$this->username'";
        $result = mysql_query($sql);
        if($result){
            $row = mysql_fetch_array($result);
        }
        $this->isAdmin = $row['isAdmin'];
        $this->isPR = $row['isPR'];
        $this->isReviewer = $row['isReviewer'];

    }
    /*
     * 获取用户名
     * @author Jiakuan
     * @date: 10/16/14
     */
    function getUsername(){
        return $this->username;
    }

    /*
     * 获取用户权限
     * @author:Jiakuan
     * @date: 10/17/14
     */
    function getRole(){
        if( $this->isAdmin()){
            return "管理员";
        }
        else if($this->isPR()){
            return "发稿人";
        }
        else if($this->isReviewer()){
            return "审稿人";
        }
        else{
            return "普通用户";
        }
    }

    /*
     * 获取管理员状态
     * @author Jiakuan
     * @date: 10/16/14
     */
    function isAdmin()
    {
        if($this->isAdmin == 1){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 获取是否PR部门状态
     * @author: Jiakuan
     * @date: 10/16/14
     */
    function isPR(){
        if($this -> isPR ==1){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 获取是否审稿人状态
     * @author: Jiakuan
     * @date: 10/16/14
     */
    function  isReviewer(){
        if($this->isReviewer == 1){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 设置成管理管理员
     * @author: Jiakuan
     * @date: 10/16/14
     * @param: 用户名
     */
    function setUserAsAdmin($username){
        $sql = "UPDATE Admin SET isAdmin = 1 WHERE Username='$username'";

        if(mysql_query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 设置成PR部门人员
     * @author: Jiakuan
     * @date: 10/16/14
     * @param: 用户名,密码
     */
    function setUserAsPR($username){
        $sql = "UPDATE Admin Set isPR = 1 WHERE Username='$username'";

        if(mysql_query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 设置成审稿人
     * @author: Jiakuan
     * @date: 10/16/14
     * @param: 用户名
     */
    function setUserAsReviewer($username){
        $sql = "UPDATE Admin SET isReviewer =1 WHERE Username = '$username'";

        if(mysql_query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 创建新成员
     * @author: Jiakuan
     * @date: 10/16/14
     * @param: 用户名, 临时密码
     */
    function createNewUser($username, $tempPassword, $isAdmin, $isPR, $isReviewer){
        $hashPassword = hash('md5', $tempPassword);
        $sql = "Insert INTO Admin (Username, tempPassword, isAdmin, isPR, isReviewer ) VALUES ('$username', '$hashPassword','$isAdmin', '$isPR', '$isReviewer')";

        if(mysql_query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 修改密码
     * @author: Jiakuan
     * @date: 10/18/14
     * @param: password
     */
    function modifyPassword($password){
        $hashPassword = hash('md5', $password);
        $sql = "UPDATE Admin SET Password = '$hashPassword' WHERE Username = '$this->username'";
        $query = mysql_query($sql);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 强制修改密码
     * @author: Jiakuan
     * @date: 10/17/14
     * @param: password, email, secret question, answer
     */
   function forceModifyPassword($password, $email, $secretQuestion, $answer){
       $hashPassword = hash('md5', $password);
       $sql = "UPDATE Admin SET Password = '$hashPassword', Email = '$email', SecretQuestion = '$secretQuestion', Answer = '$answer', tempPassword = '' WHERE Username = '$this->username'";
       $query = mysql_query($sql);
       if($query){
           return true;
       }
       else{
           return false;
       }
   }
    /*
     * 检查数据库中是否存在一样的用户名
     * @author: Jiakuan
     * @date: 10/17/14
     * @param: username
     */
    function checkDuplicate($username){
        $sql = "SELECT * FROM Admin WHERE Username = '$username'";
        $query = mysql_query($sql);
        if(mysql_num_rows($query) == 0){
            return false;
        }
        else{
            return true;
        }
    }
    /*
     * 获取管理员数量
     * @author: Jiakuan
     * @date: 10/20/2014
     */
    function getAdminNumber(){
        $sql = "SELECT * FROM Admin WHERE isAdmin = '1'";
        $query = mysql_query($sql);
        $result = mysql_num_rows($query);
        return $result;
    }
    /*
     * 获取PR部门的人数
     * @author: Jiakuan
     * @date: 10/20/2014
     */
    function getPRNumber(){
        $sql = "SELECT * FROM Admin WHERE isPR = '1'";
        $query = mysql_query($sql);
        $result = mysql_num_rows($query);
        return $result;
    }

    /*
     * 获取审稿人数
     * @author: Jiakuan
     * @date: 10/20/2014
     */
    function getReviewerNumber(){
        $sql = "SELECT * FROM Admin WHERE isReviewer = '1'";
        $query = mysql_query($sql);
        $result = mysql_num_rows($query);
        return $result;
    }
    /*
     * 获取所有管理员的邮件
     * @author: Jiakuan
     * @date: 10/19/14
     */
    function getAdminEmail(){
        $address = array();

        $sql = "SELECT * From Admin WHERE isAdmin = '1'";
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)){
            while($row = mysql_fetch_assoc($query)){
                $data[] = $row;
            }
        }
        foreach($data as $value){
            $address[] = $value['Email'];
        }

        return $address;
    }

    /*
     * 获取所有PR部门的邮件
     * @author: Jiakuan
     * @date: 10/19/14
     */
    function getPREmail(){
        $address = array();

        $sql = "SELECT * From Admin WHERE isPR = '1'";
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)){
            while($row = mysql_fetch_assoc($query)){
                $data[] = $row;
            }
        }
        foreach($data as $value){
            $address[] = $value['Email'];
        }

        return $address;
    }

    /*
     * 获取所有审稿人的邮件
     * @author: Jiakuan
     * @date: 10/19/14
     */
    function getReviewerEmail(){
        $address = array();

        $sql = "SELECT * From Admin WHERE isReviewer = '1'";
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)){
            while($row = mysql_fetch_assoc($query)){
                $data[] = $row;
            }
        }
        foreach($data as $value){
            $address[] = $value['Email'];
        }

        return $address;
    }

    /*
     * 获取所有人的邮件
     * @author: Jiakuan
     * @date: 10/20/2014
     */
    function getEmail(){
        $address = array();

        $sql = "SELECT * From Admin";
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)){
            while($row = mysql_fetch_assoc($query)){
                $data[] = $row;
            }
        }
        foreach($data as $value){
            $address[] = $value['Email'];
        }

        return $address;
    }
    /*
     * 获得具体某个用户的邮箱地址
     * @author: Jiakuan
     * @date: 10/20/14
     */
    function getUserEmail($username){
        $sql = "SELECT * FROM Admin WHERE Username = '$username'";
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)){
            $data = mysql_fetch_assoc($query);
        }

        return $data['Email'];
    }
}

?>