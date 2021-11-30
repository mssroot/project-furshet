<?php
/**
 * Created by PhpStorm.
 * User: manas
 * Date: 6/21/16
 * Time: 12:08 PM
 */

    require_once 'configure.php';

    if(isset($_GET['index'])){
        
        // reservetion start
        if(isset($_GET['reservetion'])){
            $submit = mysql_real_escape_string($_POST['reservetion_submit']);
            if(isset($submit)){
                $full_name = mysql_real_escape_string($_POST['full_name']);
                $email = mysql_real_escape_string($_POST['email']);
                $phone_number = mysql_real_escape_string($_POST['phone_number']);
                $how_many = mysql_real_escape_string($_POST['how_many']);
                $date = mysql_real_escape_string($_POST['reservetion_date']);
                $phone_no = mysql_real_escape_string($_POST['phone_no']);
                $message = mysql_real_escape_string($_POST['message']);

                $sql = "INSERT INTO reservetion(full_name,
                                                email,
                                                phone_number,
                                                how_many,
                                                reservetion_date,
                                                phone_no,
                                                message)
                         VALUES('$full_name',
                                  '$email',
                                  '$phone_number',
                                  '$how_many',
                                  '$date',
                                  '$phone_no',
                                  '$message')";
                if($result = mysql_query($sql)){
                    header('Location: index.php?res&success');
                }
                else{
                    heder('Location: index.php?res&error');
                }
            }
            else{
                header('Location: index.php?res&no_submit');
            }
        }
        else{
            header('Location: index.php?res&not_reservetion');
        }
        //reservetion stop 
        
        // contact start
        if(isset($_GET['contact'])){
            $contact_submit = mysql_real_escape_string($_POST['contact_submit']);
            if(isset($contact_submit)){
                $name = mysql_real_escape_string($_POST['your_name']);
                $email = mysql_real_escape_string($_POST['email']);
                $subject = mysql_real_escape_string($_POST['subject']);
                $message = mysql_real_escape_string($_POST['message']);

                $sql = "INSERT INTO contact(your_name,
                                            email,
                                            subject,
                                            message)
                                            VALUES('$name',
                                                    '$email',
                                                    '$subject',
                                                    '$message')";
                if($result = mysql_query($sql)){
                    header('Location: index.php?con&success');
                }
                else{
                    header('Location: index.php?con&error');
                }
            }
            else{
                header('Location: index.php?con&error');
            }
        }
        else{
            header('Location: index.php?con&not_contact');
        }
        // contact stop
    }
    else{
        header('Location: index.php?index&not_permitted');
    }