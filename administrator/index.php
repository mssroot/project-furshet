<?php
/**
 * Created by PhpStorm.
 * User: manas
 * Date: 6/21/16
 * Time: 10:10 AM
 */

    require '../configure.php';

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: log.php?no_user');
    }

    if(isset($_GET['exit'])){
        session_destroy();
        header('Location: log.php?exit');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>furshet | kochmo food</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?admin_page"> ADMIN PAGE </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../?">[go to home]</a>
                    </li>
                    <li>
                        <a href="index.php?settings"> [Settings] </a>
                    </li>
                    <li>
                        <a href="index.php?exit=logout"> [Exit]</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- container -->
    <div class="container">
        <!-- setting controls start -->
        <div>
            <?php
            if(isset($_GET['settings'])){
                ?>
                <p>
                    <a href="index.php?settings&home_slider">[home slider]</a> |
                    <a href="index.php?settings&menu">[menu]</a> |
                    <a href="index.php?settings&reservetion">[reservetion]</a> |
                    <a href="index.php?settings&galary">[galary]</a> |
                    <a href="index.php?settings&blog">[blog]</a> |
                    <a href="index.php?settings&contact">[contact]</a> |
                    <a href="index.php?settings&counter">[counter]</a>
                </p>

                <?php
                // start counter
                if(isset($_GET['counter'])){
                    ?>
                        <h2>counter section</h2>
                        <div>
                            <form method="post" action="counter_func.php?insert">
                                <label>category</label><br />
                                <select name="category">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select><br />
                                <label>counter title</label><br />
                                <input type="text" name="title" /><br />
                                <label>counter number</label><br />
                                <input type="text" name="number" /><br />
                                <label>counter descr</label><br />
                                <input type="text" name="descr" /><br />
                                <button type="submit">super</button>
                            </form>
                        </div>
                    <?php
                }
                // end counter

                // start blog 
                if(isset($_GET['blog'])){
                    ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h2>blog insert into query</h2>
                                    <div>
                                        <form method="post" action="blog_func.php?insert" enctype="multipart/form-data">
                                            <label>blog image</label><br />
                                            <input type="file" name="file" /><br />
                                            <label>blog title</label><br />
                                            <input type="text" name="title" /><br />
                                            <label>blog description: </label><br />
                                            <textarea name="descr"></textarea><br />
                                            <button type="submit">super</button>
                                        </form>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <h2>blog delete form</h2>
                            </div>
                        </div>
                    <?php
                }
                // end blog

                // menu input start
                if(isset($_GET['menu'])){
                    ?>
                    <h1>menu</h1>
                    <div>
                        <form method="post" action="menu_func.php?insert" enctype="multipart/form-data">
                            <label> menu category </label><br />
                            <select name="category">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select><br />
                            <label>menu image</label><br />
                            <input type="file" name="file" /><br />
                            <label>menu title</label><br />
                            <input type="text" name="title" /><br />
                            <label>menu price</label><br />
                            <input type="text" name="price" /><br />
                            <label>menu description</label><br />
                            <textarea  name="descr"></textarea><br />
                            <button type="submit">super</button>
                        </form>
                    </div>
                    <?php
                }
                // menu input stop
                
                // reservetion input start
                if(isset($_GET['reservetion'])){
                    ?>
                    <h3>Reservetion input </h3>
                    <?php
                    $sql_res = "SELECT * FROM reservetion ORDER BY reservetion_id DESC";
                    $result_res = mysql_query($sql_res);
                    ?>
                    <table border="" width="60%">
                        <tr>
                            <th>No: </th>
                            <th>Name: </th>
                            <th>Email: </th>
                            <th>Phone: </th>
                            <th>How many: </th>
                            <th>Date: </th>
                            <th>Phone No: </th>
                            <th>Message: </th>
                        </tr>
                    <?php
                    while($row_res = mysql_fetch_assoc($result_res)){
                        ?>
                        <tr>
                            <td><?php echo $row_res['reservetion_id']; ?></td>
                            <td><?php echo $row_res['full_name']; ?></td>
                            <td><?php echo $row_res['email']; ?></td>
                            <td><?php echo $row_res['phone_number']; ?></td>
                            <td><?php echo $row_res['how_many']; ?></td>
                            <td><?php echo $row_res['reservetion_date']; ?></td>
                            <td><?php echo $row_res['phone_no']; ?></td>
                            <td><?php echo $row_res['message']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </table>
                    <?php
                }
                // reservetion input stop

                // contact input start
                if(isset($_GET['contact'])){
                    ?>
                    <h3> Contact input </h3>
                    <?php
                    $sql_con = "SELECT * FROM contact ORDER BY contact_id DESC";
                    $result_con = mysql_query($sql_con);
                    ?>
                    <table border="" width="60%">
                        <tr>
                            <th>No: </th>
                            <th>Name: </th>
                            <th>Email: </th>
                            <th>Subject: </th>
                            <th>Message: </th>
                        </tr>
                        <?php
                        while($row_con = mysql_fetch_assoc($result_con)){
                            ?>
                            <tr>
                                <td><?php echo $row_con['contact_id']; ?></td>
                                <td><?php echo $row_con['your_name']; ?></td>
                                <td><?php echo $row_con['email']; ?></td>
                                <td><?php echo $row_con['subject']; ?></td>
                                <td><?php echo $row_con['message']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                }
                // contact input stop

                // galary control start
                if(isset($_GET['galary'])){
                    ?>
                    <h3>Galary controls </h3>
                    <div>
                        <label>Add image to galary: </label>
                        
                        <form method="POST" action="index_suc.php?index&galary&food" enctype="multipart/form-data">
                            <label> food small </label>
                            <input type="file" name="file" /><br />
                            <label> food big </label>
                            <input type="file" name="file_big" /><br />
                            <input type="submit" name="food_submit" value="OK" />
                        </form><hr />
                        
                        <form method="POST" action="index_suc.php?index&galary&drink" enctype="multipart/form-data">
                            <label> drink </label>
                            <input type="file" name="file" /><br />
                            <label> drink big </label>
                            <input type="file" name="file_big" /><br />
                            <input type="submit" name="drink_submit" value="OK" />
                        </form><hr />
                        
                        <form method="POST" action="index_suc.php?index&galary&restaurant" enctype="multipart/form-data">
                            <label> restaurant </label>
                            <input type="file" name="file" /><br />
                            <label> restaurant big </label>
                            <input type="file" name="file_big" /><br />
                            <input type="submit" name="restaurant_submit" value="OK" />
                        </form><hr />
                        
                        <form method="POST" action="index_suc.php?index&galary&dinner" enctype="multipart/form-data">
                            <label> dinner </label>
                            <input type="file" name="file" /><br />
                            <label> dinner big </label>
                            <input type="file" name="file_big" /><br />
                            <input type="submit" name="dinner_submit" value="OK" />
                        </form><hr />
                        
                        <form method="POST" action="index_suc.php?index&galary&dessert" enctype="multipart/form-data">
                            <label> dessert </label>
                            <input type="file" name="file" /><br />
                            <label> dessert big </label>
                            <input type="file" name="file_big" /><br />
                            <input type="submit" name="dessert_submit" value="OK" />
                        </form><hr />
                    </div>
                    <?php
                }
                // galary control stop

                // home slider start
                if(isset($_GET['home_slider'])){
                    ?>
                    <h3>Home slider </h3>

                    <label>Change home slider using add button...</label>
                    <div>
                        <form method="POST" action="index_suc.php?index&home_slider" enctype="multipart/form-data">
                            <label>slide: </label><br />
                            <input type="file" name="file" size="50" /><br />
                            <label>Brand: </label><br />
                            <input type="text" name="brand" size="50" /><br />
                            <label>Title: </label><br />
                            <input type="text" name="title" size="50" /><br />
                            <label>Paragraph: </label><br />
                            <textarea name="paragraph" cols="50"></textarea><br />
                            <input type="submit" name="slider_submit" value="OK" />
                        </form>
                    </div>
                    <?php
                }
                // home slider stop
            }
            ?>
        </div>
        <!-- setting controls stop -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
