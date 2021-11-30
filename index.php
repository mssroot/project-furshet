<?php
 require_once 'configure.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>furshet | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Logo img"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                       
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-latest-news">BLOG</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <?php
        $sql_slider = "SELECT * FROM slider WHERE file_size > 0 ORDER BY slider_id DESC";
        $result_slider = mysql_query($sql_slider);
        while($row_slider = mysql_fetch_assoc($result_slider)){
          ?>
          <div class="mu-top-slider-single">
            <img src="assets/img/slider/<?php echo $row_slider['file']; ?>" alt="img">
            <!-- Top slider content -->
            <div class="mu-top-slider-content">
              <span class="mu-slider-small-title"><?php echo $row_slider['brand']; ?></span>
              <h2 class="mu-slider-title"><?php echo $row_slider['title']; ?></h2>
              <p><?php echo $row_slider['paragraph']; ?></p>
              <a href="#" class="mu-readmore-btn">READ MORE</a>
            </div>
            <!-- / Top slider content -->
          </div>
          <?php
        }
        ?>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>                              
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam. Ex.</p>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 
                   <li><img src="assets/img/about-us/abtus-img-1.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-2.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-6.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-4.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-5.png" alt="img"></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
            <ul class="mu-counter-nav">
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <?php
                    $sql_counter = "select * from counter where category=1 order by id desc limit 1";
                    $result_counter = mysql_query($sql_counter);
                    $row_counter = mysql_fetch_array($result_counter);
                  ?>
                  <span><?php echo $row_counter['title']; ?></span>
                  <h3><span class="counter"><?php echo $row_counter['number']; ?></span><sup>+</sup></h3>
                  <p><?php echo $row_counter['descr']; ?></p>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <?php
                    $sql_counter_2 = "select * from counter where category=2 order by id desc limit 1";
                    $result_counter_2 = mysql_query($sql_counter_2);
                    $row_counter_2 = mysql_fetch_array($result_counter_2);
                  ?>
                  <span><?php echo $row_counter_2['title']; ?></span>
                  <h3><span class="counter"><?php echo $row_counter_2['number']; ?></span><sup>+</sup></h3>
                  <p><?php echo $row_counter_2['descr']; ?></p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <?php
                    $sql_counter_3 = "select * from counter where category=3 order by id desc limit 1";
                    $result_counter_3 = mysql_query($sql_counter_3);
                    $row_counter_3 = mysql_fetch_array($result_counter_3);
                  ?>
                  <span><?php echo $row_counter_3['title']; ?></span>
                   <h3><span class="counter"><?php echo $row_counter_3['number']; ?></span><sup>+</sup></h3>
                  <p><?php echo $row_counter_3['descr']; ?></p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <?php
                    $sql_counter_4 = "select * from counter where category=4 order by id desc limit 1";
                    $result_counter_4 = mysql_query($sql_counter_4);
                    $row_counter_4 = mysql_fetch_array($result_counter_4);
                  ?>
                  <span><?php echo $row_counter_4['title']; ?></span>
                  <h3><span class="counter"><?php echo $row_counter_4['number']; ?></span><sup>+</sup></h3>
                  <p><?php echo $row_counter_4['descr']; ?></p>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
                <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                   <div class="row">
                      <?php
                        $sql_menu_one = "select * from menu where category=1 order by id desc limit 6";
                        $query_menu_one = mysql_query($sql_menu_one);
                        while($row_menu_one = mysql_fetch_assoc($query_menu_one)){
                          ?>
                          
                              <div class="col-md-6">
                                  <ul class="mu-menu-item-nav">
                                 
                                     <li>
                                      <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" src="uploads/<?php echo $row_menu_one['file']; ?>" alt="img">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#"><?php echo $row_menu_one['title']; ?></a></h4>
                                          <span class="mu-menu-price">$<?php echo $row_menu_one['price']; ?></span>
                                          <p><?php echo $row_menu_one['descr']; ?></p>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>  
                              </div>
                          
                          <?php
                        }
                      ?>
                       </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <?php
                        $sql_menu_two = "select * from menu where category=2 order by id desc limit 6";
                        $query_menu_two = mysql_query($sql_menu_two);
                        while($row_menu_two = mysql_fetch_assoc($query_menu_two)){
                          ?>
                          
                              <div class="col-md-6">
                                  <ul class="mu-menu-item-nav">
                                 
                                     <li>
                                      <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" src="uploads/<?php echo $row_menu_two['file']; ?>" alt="img">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#"><?php echo $row_menu_two['title']; ?></a></h4>
                                          <span class="mu-menu-price">$<?php echo $row_menu_two['price']; ?></span>
                                          <p><?php echo $row_menu_two['descr']; ?></p>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>  
                              </div>
                          
                          <?php
                        }
                      ?>
                       </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <?php
                        $sql_menu_three = "select * from menu where category=3 order by id desc limit 6";
                        $query_menu_three = mysql_query($sql_menu_three);
                        while($row_menu_three = mysql_fetch_assoc($query_menu_three)){
                          ?>
                          
                              <div class="col-md-6">
                                  <ul class="mu-menu-item-nav">
                                 
                                     <li>
                                      <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" src="uploads/<?php echo $row_menu_three['file']; ?>" alt="img">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#"><?php echo $row_menu_three['title']; ?></a></h4>
                                          <span class="mu-menu-price">$<?php echo $row_menu_three['price']; ?></span>
                                          <p><?php echo $row_menu_three['descr']; ?></p>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>  
                              </div>
                          
                          <?php
                        }
                      ?>
                       </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <?php
                        $sql_menu_four = "select * from menu where category=4 order by id desc limit 6";
                        $query_menu_four = mysql_query($sql_menu_four);
                        while($row_menu_four = mysql_fetch_assoc($query_menu_four)){
                          ?>
                          
                              <div class="col-md-6">
                                  <ul class="mu-menu-item-nav">
                                 
                                     <li>
                                      <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" src="uploads/<?php echo $row_menu_four['file']; ?>" alt="img">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#"><?php echo $row_menu_four['title']; ?></a></h4>
                                          <span class="mu-menu-price">$<?php echo $row_menu_four['price']; ?></span>
                                          <p><?php echo $row_menu_four['descr']; ?></p>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>  
                              </div>
                          
                          <?php
                        }
                      ?>
                       </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <?php
                        $sql_menu_five = "select * from menu where category=5 order by id desc limit 6";
                        $query_menu_five = mysql_query($sql_menu_five);
                        while($row_menu_five = mysql_fetch_assoc($query_menu_five)){
                          ?>
                          
                              <div class="col-md-6">
                                  <ul class="mu-menu-item-nav">
                                 
                                     <li>
                                      <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" src="uploads/<?php echo $row_menu_five['file']; ?>" alt="img">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#"><?php echo $row_menu_five['title']; ?></a></h4>
                                          <span class="mu-menu-price">$<?php echo $row_menu_five['price']; ?></span>
                                          <p><?php echo $row_menu_five['descr']; ?></p>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>  
                              </div>
                          
                          <?php
                        }
                      ?>
                       </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>
              <form class="mu-reservation-form" method="POST" action="index_suc.php?index&reservetion">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                       
                      <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="how_many" class="form-control">
                        <option value="0">How Many?</option>
                        <option value="1 Person">1 Person</option>
                        <option value="2 People">2 People</option>
                        <option value="3 People">3 People</option>
                        <option value="4 People">4 People</option>
                        <option value="5 People">5 People</option>
                        <option value="6 People">6 People</option>
                        <option value="7 People">7 People</option>
                        <option value="8 People">8 People</option>
                        <option value="9 People">9 People</option>
                        <option value="10 People">10 People</option>
                      </select>                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="reservetion_date" class="form-control" id="datepicker" placeholder="Date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="phone_no" class="form-control" placeholder="Phone No">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                    </div>
                  </div>
                  <button type="submit" name="reservetion_submit" class="mu-readmore-btn">Make Reservation</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li class="filter active" data-filter="all">ALL</li>
                  <li class="filter active" data-filter=".food">FOOD</li>
                  <li class="filter" data-filter=".drink">DRINK</li>
                  <li class="filter" data-filter=".restaurant">RESTAURANT</li>
                  <li class="filter" data-filter=".dinner">DINNER</li>
                  <li class="filter" data-filter=".dessert">DESSERT</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                    <?php
                    $sql_food = "SELECT * FROM galary WHERE food_small_size > 0 ORDER BY galary_id DESC LIMIT 2";
                    $result_food = mysql_query($sql_food);
                    while($row_food = mysql_fetch_assoc($result_food)){
                      ?>
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/food/small/<?php echo $row_food['food_small']; ?>"></a>
                      </figure>
                      <div class="mu-single-gallery-info">
                        <a href="assets/img/gallery/food/big/<?php echo $row_food['food_big']; ?>" data-fancybox-group="gallery" class="fancybox">
                          <img src="assets/img/plus.png" alt="plus icon img">
                        </a>
                      </div>
                  </div>
                </div>
                      <?php
                    }
                    ?>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <?php
                $sql_drink = "SELECT * FROM galary WHERE drink_small_size > 0 ORDER BY galary_id DESC LIMIT 2";
                $result_drink = mysql_query($sql_drink);
                while($row_drink = mysql_fetch_assoc($result_drink)){
                  ?>
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4 mix drink">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/drink/small/<?php echo $row_drink['drink_small']; ?>"></a>
                      </figure>
                      <div class="mu-single-gallery-info">
                        <a href="assets/img/gallery/drink/big/<?php echo $row_drink['drink_big']; ?>" data-fancybox-group="gallery" class="fancybox">
                          <img src="assets/img/plus.png" alt="plus icon img">
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>            
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <?php
                $sql_restaurant = "SELECT * FROM galary WHERE restaurant_small_size > 0 ORDER BY galary_id DESC LIMIT 2";
                $result_restaurant = mysql_query($sql_restaurant);
                while($row_restaurant = mysql_fetch_assoc($result_restaurant)){
                  ?>
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4 mix restaurant">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/restaurant/small/<?php echo $row_restaurant['restaurant_small']; ?>"></a>
                      </figure>
                      <div class="mu-single-gallery-info">
                        <a href="assets/img/gallery/restaurant/big/<?php echo $row_restaurant['restaurant_big']; ?>" data-fancybox-group="gallery" class="fancybox">
                          <img src="assets/img/plus.png" alt="plus icon img">
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <?php
                $sql_dinner = "SELECT * FROM galary WHERE dinner_small_size > 0 ORDER BY galary_id DESC LIMIT 2";
                $result_dinner = mysql_query($sql_dinner);
                while($row_dinner = mysql_fetch_assoc($result_dinner)){
                  ?>
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4 mix dinner">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/dinner/small/<?php echo $row_dinner['dinner_small']; ?>"></a>
                      </figure>
                      <div class="mu-single-gallery-info">
                        <a href="assets/img/gallery/dinner/big/<?php echo $row_dinner['dinner_big']; ?>" data-fancybox-group="gallery" class="fancybox">
                          <img src="assets/img/plus.png" alt="plus icon img">
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <?php
                $sql_dessert = "SELECT * FROM galary WHERE dessert_small_size > 0 ORDER BY galary_id DESC LIMIT 1";
                $result_dessert = mysql_query($sql_dessert);
                while($row_dessert = mysql_fetch_assoc($result_dessert)){
                  ?>
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4 mix dessert">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a href="#"><img alt="<?php echo $row_dessert['dessert_small']; ?>" src="assets/img/gallery/dessert/small/<?php echo $row_dessert['dessert_small']; ?>"></a>
                      </figure>
                      <div class="mu-single-gallery-info">
                        <a href="assets/img/gallery/dessert/big/<?php echo $row_dessert['dessert_big']; ?>" data-fancybox-group="gallery" class="fancybox">
                          <img src="assets/img/plus.png" alt="plus icon img">
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
                <!-- End single gallery image -->                         
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
                <i class="fa fa-spoon"></i>              
                <span class="mu-title-bar"></span>
              </div>
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->

  <!-- Start Subscription section -->
  <section id="mu-subscription">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-subscription-area">
            <form class="mu-subscription-form">
              <input type="text" placeholder="Type Your Email Address">
              <button class="mu-readmore-btn" type="Submit">SUBSCRIBE</button>
            </form>            
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!-- End Subscription section -->

  <!-- Start Latest News -->
  <section id="mu-latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-news-area">
            <div class="mu-title">
              <span class="mu-subtitle">Latest News</span>
              <h2>FROM OUR BLOG</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-latest-news-content">
              <div>
               <div class="row">
                <?php 
                  $sql_blog = "select * from blog order by id desc limit 2";
                  $result_blog = mysql_query($sql_blog);
                  while($row_blog = mysql_fetch_assoc($result_blog)){
                    $id = $row_blog['id'];
                    ?>

                        <!-- start single blog -->
                        <div class="col-md-6">
                          <article class="mu-news-single">
                            <h3><a href="#"><?php echo $row_blog['title']; ?></a></h3>
                            <figure class="mu-news-img">
                              <a href="#"><img src="uploads/<?php echo $row_blog['file']; ?>" alt="img"></a>                      
                            </figure>
                            <div class="mu-news-single-content">                      
                              <ul class="mu-meta-nav">
                                <li>By Admin</li>
                                <li>Date: <?php echo $row_blog['date']; ?></li>
                              </ul>
                              <p><?php
                                // strip tags to avoid breaking any html
                                      $string = $row_blog['descr'];
                                      $string = strip_tags($string);

                                      if (strlen($string) > 20) {

                                          // truncate string
                                          $stringCut = substr($string, 0, 20);

                                          // make sure it ends in a word so assassinate doesn't become ass...
                                          $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                      }
                                      echo $string; ?></p>
                              <div class="mu-news-single-bottom">
                                <a href="blog-single.php?view_id=<?php echo $id; ?>" class="mu-readmore-btn">Read More</a>
                              </div>
                            </div>                   
                          </article>
                        </div>
                      
                    <?php
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest News -->

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form" method="POST" action="index_suc.php?index&contact">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="your_name" class="form-control" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Type Your Message"></textarea>
                      </div>                      
                      <button type="submit" name="contact_submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.</p>
                      <address>
                        <p><i class="fa fa-phone"></i> (850) 457 6688</p>
                        <p><i class="fa fa-envelope-o"></i>contact@markups.io</p>
                        <p><i class="fa fa-map-marker"></i>368 St. Panama City, Florida, USA</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>