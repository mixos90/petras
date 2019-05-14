<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
    </head>
<body>
    
    
    <div id="top"> <!--TOP BEGIN-->
        
      <div class="container"> <!--CONTAINER BEGIN-->
      <div class="col-md-6 offer"> <!--col-md-6 offer BEGIN-->
          
         <a href="#" class="btn btn-success btn-sm">Welcome</a> 
         <a href="checkout.php"> 4 Items in your cart Shopping cart | Total price is: $300</a>
      </div><!--col-md-6 offer FINISH-->
      
               <div class="col-md-6"><!--col-md-6 BEGIN-->
                   
                   <ul class="menu"><!--cmenu BEGIN-->
                       
                       <li>
                           <a href="customer_register.php">Register</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Go To Cart</a>
                       </li>
                       <li>
                           <a href="checkout.php">Login</a>
                       </li>
                       
                   </ul><!--cmenu FINISH-->
                   
               </div><!--clo-md-6  FINISH-->

      </div> <!--CONTAINER FINISH-->
        
    </div><!--TOP FINISH-->
    
    <div id="navbar" class="navbar navbar-default"><!--navbar navbar-default BEGIN-->
        
        <div class="container"><!--CONTAINER FINISH-->
            
            <div class="navbar-header"><!--NAVBAR HEADER BEGIN-->
                <a href="index.php" class="navbar-brand home"><!--navbar-brand home BEGIN-->
                    
                    <img src="images/ecom-store-logo.png" alt="M-Dev-Store Logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-Dev-Store Logo Mobile" class="visible-xs">
                </a><!--navbar-brand home FINISH-->
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                 <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
                
            </div><!--NAVBAR HEADER FINISH-->
            
            <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse HEADER BEGIN-->
                
                <div class="padding-nav"><!--padding-nav BEGIN-->
                    
                    <ul class="nav navbar-nav left"><!--nav navbar-nav left BEGIN-->
                        
                        <li class="active">
                        <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                        
                    </ul><!--nav navbar-nav left FINISH-->
                    
                </div><!--padding-nav FINISH-->
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right BEGIN-->
                    
                    <i class="fa fa-shopping-cart">
                        
                        <span>4 Items In Your Cart</span>
                    </i>
                </a><!--btn navbar-btn btn-primary right FINISH-->
                
                   <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right BEGIN-->
                    
                    <button class="btn btn-primary navbar-btn" type="buttton" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn BEGIN-->
                       
                       <span class="sr-only">Toggle Search</span>
                       <i class="fa fa-search"></i>
                       
                        
                    </button><!--btn btn-primary navbar-btn FINISH-->
                </div><!--navbar-collapse collapse right FINISH-->
                
                <div class="collapse clearfix" id="search"><!--collapse clearfix BEGIN-->
                    
                    <form method="get" action="results.php" class="navbar-form"><!--navbar-form BEGIN-->
                        <div class="input-group"><!--input-group BEGIN-->
                            
                            <input type="text" class="form-control" placeholder="Search" name="user_querry" required>
                            <span class="input-group-btn"><!--input-group-btn BEGIN-->
                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!--btn btn-primary BEGIN-->
                                
                                <i class="fa fa-search"></i>
                            </button><!--btn btn-primary FINISH-->
                            </span><!--input-group-btn-->
                        </div><!--input-group FINISH-->
                    </form><!--navbar-form FINISH-->
                    
                </div><!--collapse clearfix FINISH-->
                
                
            </div><!--navbar-collapse collapse FINISH-->
        </div><!--CONTAINER FINISH-->
        
    </div><!--navbar navbar-default FINISH-->
    
    <div class="container" id="slider"><!--container BEGIN-->
        
        <div class="col-md-12"><!--col-md-12 BEGIN-->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide BEGIN-->
                
                <ol class="carousel-indicators"><!--carousel-indicators BEGIN-->
                    
                 <li class="active" data-target="#myCarousel" data-slide-to="0"></li>   
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
                 <li data-target="#myCarousel" data-slide-to="3"></li>
                 
                </ol><!--carousel-indicators FINISH-->
                
                <div class="carousel-inner"><!--carousel-inner BEGIN-->
                    
                    <div class="item active">
                        
                        <img src="admin_area/slides_images/slide-1.jpg.jpg" alt="Slider Image 1">
                    </div>
                    
                    <div class="item">
                        
                        <img src="admin_area/slides_images/slide-2.jpg.jpg" alt="Slider Image 2">
                    </div>
                    <div class="item">
                        
                        <img src="admin_area/slides_images/slide-3.jpg.jpg" alt="Slider Image 3">
                    </div>
                    <div class="item">
                        
                        <img src="admin_area/slides_images/slide-4.jpg.jpg" alt="Slider Image 4">
                    </div>
                </div><!--carousel-inner FINISH-->
                
                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control BEGIN-->
                    
                    <span class="glyphicon glyphicon-chevron-left">
                        <span class="sr-only">Previous</span>
                        
                    </span>
                    
                </a><!--left carousel-control FINISH-->
                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control BEGIN-->
                    
                    <span class="glyphicon glyphicon-chevron-right">
                        <span class="sr-only">Next</span>
                        
                    </span>
                    
                </a><!--right carousel-control FINISH-->
            </div><!--carousel slide FINISH-->
        </div><!--col-md-12 FINISH-->
    </div><!--container FINISH-->
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>   