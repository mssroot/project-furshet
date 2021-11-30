<?php
/**
 * Created by PhpStorm.
 * User: manas
 * Date: 6/21/16
 * Time: 1:21 PM
 */
    require_once '../configure.php';

    if(isset($_GET['index'])){

        // galary controls start
        if(isset($_GET['galary'])){
            if(isset($_GET['food'])){
                $food_submit = mysql_real_escape_string($_POST['food_submit']);
                if(isset($food_submit)){
                    $file = rand(1000, 100000). "-" . $_FILES['file']['name'];
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder = "../assets/img/gallery/food/small/";
                    $file_size = $_FILES['file']['size'];
                    $new_size = $file_size/1024;
                    $new_file_name = strtolower($file);
                    $final_file = str_replace(' ', '-', $new_file_name);
                    move_uploaded_file($file_loc, $folder.$final_file);

                    $file_big = rand(1000, 100000) . "-" . $_FILES['file_big']['name'];
                    $file_big_loc = $_FILES['file_big']['tmp_name'];
                    $folder_big = "../assets/img/gallery/food/big/";
                    $file_big_size = $_FILES['file_big']['size'];
                    $new_big_size = $file_big_size/1024;
                    $new_file_big_name = strtolower($file_big);
                    $final_file_big = str_replace(' ', '-', $new_file_big_name);
                    move_uploaded_file($file_big_loc, $folder_big.$final_file_big);

                    $sql = "INSERT INTO galary(food_big, food_big_size, food_small, food_small_size) 
                            VALUES('$final_file_big', '$new_big_size', '$final_file', '$new_size')";
                    if($result = mysql_query($sql)){
                        header('Location: index.php?settings&galary&success');
                    }
                    else{
                        header('Location: index.php?settings&galary&error');
                    }
                }
            }

            if(isset($_GET['drink'])){
                $drink_submit = mysql_real_escape_string($_POST['drink_submit']);
                if(isset($drink_submit)){
                    $file = rand(1000, 100000). "-" . $_FILES['file']['name'];
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder = "../assets/img/gallery/drink/small/";
                    $new_file_name = strtolower($file);
                    $final_file = str_replace(' ', '-', $new_file_name);
                    $file_size = $_FILES['file']['size'];
                    $new_size = $file_size/1024;
                    move_uploaded_file($file_loc, $folder.$final_file);

                    $file_big = rand(1000, 100000) . "-" . $_FILES['file_big']['name'];
                    $file_big_loc = $_FILES['file_big']['tmp_name'];
                    $folder_big = "../assets/img/gallery/drink/big/";
                    $file_big_size = $_FILES['file_big']['size'];
                    $new_big_size = $file_big_size/1024;
                    $new_file_big_name = strtolower($file_big);
                    $final_file_big = str_replace(' ', '-', $new_file_big_name);
                    move_uploaded_file($file_big_loc, $folder_big.$final_file_big);

                    $sql = "INSERT INTO galary(drink_big, drink_big_size, drink_small, drink_small_size) 
                            VALUES('$final_file_big', '$new_big_size', '$final_file', '$new_size')";
                    if($result = mysql_query($sql)){
                        header('Location: index.php?settings&galary&success');
                    }
                    else{
                        header('Location: index.php?settings&galary&error');
                    }
                }
            }

            if(isset($_GET['restaurant'])){
                $restaurant_submit = mysql_real_escape_string($_POST['restaurant_submit']);
                if(isset($restaurant_submit)){
                    $file = rand(1000, 100000). "-" . $_FILES['file']['name'];
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder = "../assets/img/gallery/restaurant/small/";
                    $new_file_name = strtolower($file);
                    $final_file = str_replace(' ', '-', $new_file_name);
                    $file_size = $_FILES['file']['size'];
                    $new_size = $file_size/1024;

                    move_uploaded_file($file_loc, $folder.$final_file);

                    $file_big = rand(1000, 100000) . "-" . $_FILES['file_big']['name'];
                    $file_big_loc = $_FILES['file_big']['tmp_name'];
                    $folder_big = "../assets/img/gallery/restaurant/big/";
                    $file_big_size = $_FILES['file_big']['size'];
                    $new_big_size = $file_big_size/1024;
                    $new_file_big_name = strtolower($file_big);
                    $final_file_big = str_replace(' ', '-', $new_file_big_name);
                    move_uploaded_file($file_big_loc, $folder_big.$final_file_big);

                    $sql = "INSERT INTO galary(restaurant_big, restaurant_big_size, restaurant_small, restaurant_small_size) 
                            VALUES('$final_file_big', '$new_big_size', '$final_file', '$new_size')";
                    if($result = mysql_query($sql)){
                        header('Location: index.php?settings&galary&success');
                    }
                    else{
                        header('Location: index.php?settings&galary&error');
                    }
                }
            }

            if(isset($_GET['dinner'])){
                $dinner_submit = mysql_real_escape_string($_POST['dinner_submit']);
                if(isset($dinner_submit)){
                    $file = rand(1000, 100000). "-" . $_FILES['file']['name'];
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder = "../assets/img/gallery/dinner/small/";
                    $new_file_name = strtolower($file);
                    $final_file = str_replace(' ', '-', $new_file_name);

                    $file_size = $_FILES['file']['size'];
                    $new_size = $file_size/1024;
                    move_uploaded_file($file_loc, $folder.$final_file);

                    $file_big = rand(1000, 100000) . "-" . $_FILES['file_big']['name'];
                    $file_big_loc = $_FILES['file_big']['tmp_name'];
                    $folder_big = "../assets/img/gallery/dinner/big/";
                    $file_big_size = $_FILES['file_big']['size'];
                    $new_big_size = $file_big_size/1024;
                    $new_file_big_name = strtolower($file_big);
                    $final_file_big = str_replace(' ', '-', $new_file_big_name);
                    move_uploaded_file($file_big_loc, $folder_big.$final_file_big);

                    $sql = "INSERT INTO galary(dinner_big, dinner_big_size, dinner_small, dinner_small_size) 
                            VALUES('$final_file_big', '$new_big_size', '$final_file', '$new_size')";
                    if($result = mysql_query($sql)){
                        header('Location: index.php?settings&galary&success');
                    }
                    else{
                        header('Location: index.php?settings&galary&error');
                    }
                }
            }

            if(isset($_GET['dessert'])){
                $dessert_submit = mysql_real_escape_string($_POST['dessert_submit']);
                if(isset($dessert_submit)){
                    $file = rand(1000, 100000). "-" . $_FILES['file']['name'];
                    $file_loc = $_FILES['file']['tmp_name'];
                    $folder = "../assets/img/gallery/dessert/small/";
                    $new_file_name = strtolower($file);
                    $final_file = str_replace(' ', '-', $new_file_name);
                    $file_size = $_FILES['file']['size'];
                    $new_size = $file_size/1024;
                    move_uploaded_file($file_loc, $folder.$final_file);

                    $file_big = rand(1000, 100000) . "-" . $_FILES['file_big']['name'];
                    $file_big_loc = $_FILES['file_big']['tmp_name'];
                    $folder_big = "../assets/img/gallery/dessert/big/";
                    $file_big_size = $_FILES['file_big']['size'];
                    $new_big_size = $file_big_size/1024;
                    $new_file_big_name = strtolower($file_big);
                    $final_file_big = str_replace(' ', '-', $new_file_big_name);
                    move_uploaded_file($file_big_loc, $folder_big.$final_file_big);

                    $sql = "INSERT INTO galary(dessert_big, dessert_big_size, dessert_small, dessert_small_size) 
                            VALUES('$final_file_big', '$new_big_size', '$final_file', '$new_size')";
                    if($result = mysql_query($sql)){
                        header('Location: index.php?settings&galary&success');
                    }
                    else{
                        header('Location: index.php?settings&galary&error');
                    }
                }
            }

        }
        // galary controls stop

        // home slider start
        if(isset($_GET['home_slider'])){
            $slider_submit = mysql_real_escape_string($_POST['slider_submit']);
            if(isset($slider_submit)){
                $brand = mysql_real_escape_string($_POST['brand']);
                $title = mysql_real_escape_string($_POST['title']);
                $paragraph = mysql_real_escape_string($_POST['paragraph']);
                $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
                $file_loc = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $folder = "../assets/img/slider/";
                $new_size = $file_size/1024;
                $new_file_name = strtolower($file);
                $final_file = str_replace(' ', '-', $new_file_name);
                move_uploaded_file($file_loc, $folder.$final_file);

                $sql = "INSERT INTO slider(file, file_size, brand, title, paragraph)
                        VALUES('$final_file', '$new_size', '$brand', '$title', '$paragraph')";
                if($result = mysql_query($sql)){
                    header('Location: index.php?settings&home_slider&success');
                }
                else{
                    header('Location: index.php?settings&home_slider&error');
                }

            }
            else{
                header('Location: index.php?settings&home_slider&not_permitted');
            }
        }
        // home slider stop
    }
    else{
        header('Location: index.php?settings&not_permitted');
    }