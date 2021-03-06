<?php 
include("koneksi.php");
$id_produk = $_GET["id_produk"];
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ratu Textile</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />




</head>
<style>
.container_img {
  position: relative;
  width: auto;
}

/* Make the image responsive */
.container_img img {
  width: auto;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.container_img .btn_img {
  position: absolute;
  top: 95%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #39C;
  color: #0F6;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.big-checkbox {
	width: 30px; 
	height: 30px;
	position: absolute;
	top: 0;
	eft: 0;		
	background-color: #eee;
}
</style>

<body >


    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@Ratu Textile.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="#" data-toggle="modal" data-target="#regis-modal"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="img/logo.jpg" alt="Ratu Textile logo" class="hidden-xs hidden-sm">
                                <img src="img/logo-small.png" alt="Ratu Textile logo" class="visible-xs visible-sm"><span class="sr-only">Ratu Textile - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown ">
                                    <a href="index.html">Home</a>
                                    
                                </li>
                                <li class="dropdown active">
                                    <a href="product.html"  >Product</b></a>
                                    
                                </li>

                                
                                <li class="dropdown">
                                    <a href="cart.html">Cart <b class="glyphicon glyphicon-shopping-cart"></b><span class="badge pull-right">0</span></a>
                              
                                </li>
                                
                                                    
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>
        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->
        
        <!-- *** Register MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="regis-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="name">
                            </div>
                            <div class="form-group">
                            	
                            				<label for="gender">
                                                Male
                                                <input type="radio" id="gender" name="gender" value="l" class="size-input">
                                            </label>
                                            <label for="gender">
                                                Female
                                                <input type="radio" id="gender" name="gender" value="l" class="size-input">
                                            </label>
                            
                            
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="re-password">
                            </div>
<br>
                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Sign up</button>
                            </p>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** Register MODAL END *** -->
<?php
	$search_produk=mysql_query("SELECT * FROM tb_produk where id_produk='".$id_produk."' ");
	while($produk_detil=mysql_fetch_array($search_produk)){
	
		$nama_produk = $produk_detil[nama_produk];
		$gambar_produk_gabung = $produk_detil[gambar_produk];
		$warna_produk_gabung = $produk_detil[warna_produk];
		$id_model = $produk_detil[id_model];
		$harga_produk = $produk_detil[harga_produk];
		$info_produk = $produk_detil[info_produk];
		$catatan_produk = $produk_detil[catatan_produk];
	
	}

?>  




        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $nama_produk; ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-sm-12">
                    <?php
						$gambar_produk = explode(",",$gambar_produk_gabung);
                    ?>
                        <div class="row" id="productMain">
                            <div class="col-sm-4">
                                <div id="mainImage">
                                    <img src="img_produk/<?php echo $gambar_produk[0]; ?>" alt="" class="img-responsive">
                                </div>

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                <div class="row" id="thumbs">
                                <?php 
								$n=0;
								$cek=0;
								
									while($cek<1){ 
								?>
                               
                                    <div class="col-xs-4">
                                    
                                        <a href="img_produk/<?php echo $gambar_produk[$n]; ?>" class="thumb">
                                            <img src="img_produk/<?php echo $gambar_produk[$n]; ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
								<?php 
									$n++;
								if($gambar_produk[$n]==""){
									$cek=2;
									}
								} ?>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="box" style="margin-bottom:0px">
                                    
                                    <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                        
                                     
                                        <form>
                                        <div class="col-sm-4" style="padding-top:5px">
                                            <h3>Available color</h3>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="form-control h3" >
                                            <?php 
											$warna_produk = explode(",",$warna_produk_gabung);
												$n=0;
												$cek=0;
												while($cek<1){ 
											?>
                                            	<option>
                                                	<?php echo $warna_produk[$n]; ?>
                                                </option>
                                            <?php 
												$n++;
												if($warna_produk[$n]==""){
												$cek=2;
												}
											} ?>		
                                            </select>
                                        </div>
                                            <br>
                                            <br>
										</form>
                                        <br>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                        
                                        <div class="col-sm-12">
                                        	
                                        	<div class="col-sm-5">
                                            	<span class="price">Rp. <?php echo number_format($harga_produk, 0,"." ,"."); ?></span>
                                           	</div>
                                            <div class="col-sm-7" style="padding-top:10px">
                                                 <button  class="btn btn-template-main" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="glyphicon glyphicon-scissors"></i> Tailor</button>
                                                     <b style="margin-left:10px;margin-right:10px;">OR</b>
                                                <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>                                            
                                                </button>
                                            </div>
                                        	
                                        </div>
                                      </div>
                                      </div>
                                      <div class="panel panel-default">
                                       
                                        <div id="collapse2" class="panel-collapse collapse">
                                        
                                        
                                        
                                        <form>
  

                                            <center><h3>Available Models</h3>
                                            </center>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" data-interval="false">
                                                    
                                                    <div class="item active">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="container_img">
                                                              <img src="../Model/1.jpg" alt="Snow" class="img-responsive image1">
                          
                                                              <input type="checkbox" name="model" id="model" class="btn_img big-checkbox ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="container_img">
                                                              <img src="../Model/2.jpg" alt="Snow" class="img-responsive image1">
                          
                                                              <input type="checkbox" name="model" id="model" class="btn_img big-checkbox">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="container_img">
                                                              <img src="../Model/3.jpg" alt="Snow" class="img-responsive image1">
                          
                                                              <input type="checkbox" name="model" id="model" class="btn_img big-checkbox">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                               </div>
                                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                       		</div>
										</form>
                                        <br>
                                        <br>
                                        <div class="col-sm-12">
                                        	
                                        	<div class="col-sm-5">
                                            	<span class="price">Rp. 124.000</span>
                                           	</div>
                                            <div class="col-sm-7" style="padding-top:10px">
                                             <button  class="btn btn-template-main" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="glyphicon glyphicon-scissors"></i> Fabric</button>
                                                     <b style="margin-left:10px;margin-right:10px;">OR</b>
                                                <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>                                            
                                                </button>
                                            </div>
                                        	
                                        </div>

                                        </div>
                                      </div>
                                    </div>                                    
                                </div>
                           
                                <h4>Product details</h4>
                                <p> Sifon atau Chiffon, Varian warna lengkap, Minimal pembelian 10 m, Bahan ringan, Cukup Transparan, Sangat Transparan untuk warna-warna cerah, Bahan jatuh, Karakter kain Lemas tidak Kaku, Lebar 150cm</p>
                                <h4>Material & care</h4>
                                <ul>
                                    <li>Polyester</li>
                                    <li>Machine wash</li>
                                </ul>
                                <h4>Size & Fit</h4>
                                <ul>
                                    <li>Regular fit</li>
                                    <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                                </ul>

                                <blockquote>
                                    <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                    </p>
                                </blockquote>

                                
                            </div>

                        </div>


                        <div class="box social" id="product-social">
                            <h4>Show it to your friends</h4>
                            <p>
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box text-uppercase">
                                    <h3>You may also like these products</h3>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../Siap Upload dgn nama/T 25/T 25 H - MAROON copy.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>T 25-Maroon</h3>
                                        <p class="price">Rp. 100.000</p>

                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../Siap Upload dgn nama/T 66/T 66 F - Tosca Pink copy.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>T 66-Tosca Pink</h3>
                                        <p class="price">Rp. 123.000</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../Siap Upload dgn nama/T49/T49F - Purple copy.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>T49-Purple</h3>
                                        <p class="price">Rp. 132.000</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                        </div>

                       

                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->


                        <!-- *** MENUS AND FILTERS END *** -->

                        
                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

    


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Your company / name goes here</p>
                    <p class="pull-right">Template by <a href="https://bootstrapious.com">Bootstrapious</a> & <a href="https://fity.cz">Fity.cz</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

</body>

</html>