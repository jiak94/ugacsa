<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/23/14
 * Time: 9:36 PM
 */
require_once("../connect.php");
require_once("../inc/class/Email.php");

class Request {

    /*
     * 添加到确认数据库
     * @author: Jiakuan
     * @date: 10/24/14
     */
    function addToRequest($name, $department, $email){
        $sql = "INSERT INTO Request(realName, department, email) VALUES ('$name', '$department', '$email')";
        $query = mysql_query($sql);

        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 从数据库中删除
     * @author: Jiakuan
     * @date:10/24/14
     */
    function removeRequest($id){
        $sql = "DELETE FROM Request WHERE id='$id'";
        $query = mysql_query($sql);

        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    /*
     * 更改accept状态
     * @author: Jiakuan
     * @data: 10/24/14
     */
    function accept($id){
        $sql = "UPDATE Request SET accept='1' WHERE id='$id'";
        $query= mysql_query($sql);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    /*
     * 确认创建账号
     * @author: Jiakuan
     * @date: 10/24/14
     */
    function confirmRequest($id, $account, $tempPassword){
        $EMAIL= new Email();
        $sql = "SELECT * From Request WHERE id='$id'";
        $query = mysql_query($sql);
        if((!$query)||(mysql_num_rows($query)==0)){
            echo "query result".$query;
            echo "row number".mysql_num_rows($query);
            return false;
        }
        else{
            $data=mysql_fetch_array($query);
            $email = $data['email'];
            if($this->accept($id)){
                $subject = "Account has Already Been Set Up!";
                $message = "您的账号已经成功建立\n\n用户名为: ".$account."\n密码为: ".$tempPassword;
                $EMAIL->sendEmailTo($email, $subject, $message);
                return true;
            }
            else{
                return false;
            }

        }
    }
}

?>