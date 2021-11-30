<?php
/**
 * Created by PhpStorm.
 * User: manas
 * Date: 6/21/16
 * Time: 10:27 AM
 */

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'furshet';

    mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());