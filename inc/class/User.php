<?php
/**
 * @author: Jiakuan
 * Date: 10/16/14
 * Time: 10:26 AM
 */
require_once("../connect.php");
class user {
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
}

?>