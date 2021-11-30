<?php
/**
 * Created by PhpStorm.
 * User: manas
 * Date: 6/21/16
 * Time: 10:18 AM
 */
    require_once '../../configure.php';

    session_start();

        $s = mysql_real_escape_string($_POST['s']);
        if(isset($s)){
            $u = mysql_real_escape_string($_POST['u']);
            $p = mysql_real_escape_string($_POST['p']);
            
            $sql = "SELECT * FROM login WHERE login_username = '$u'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            
            if($p == $row['login_password']){
                $_SESSION['username'] = $row['login_username'];
                header('Location: ../index.php?welcome');
            }
            else{
                header('Location: index.html?error');
            }
        }