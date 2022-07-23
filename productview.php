
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NasaFurniture</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> NasaFurniture  </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/Matar-Paneer-1.jpg" alt="">
            <div class="content">
                <h3>Matar paneer</h3>
                <span class="price"> &#8377 60/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/ladyfinger.webp" alt="">
            <div class="content">
                <h3> Fried - Bhindi</h3>
                <span class="price"> &#8377 40 /-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/pneer.jpg" alt="">
            <div class="content">
                <h3>paneer</h3>
                <span class="price"> &#8377 150/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="total"> total :  &#8377 250/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
        
		<!-- <input type="submit" name="login" value="login now" class="btn" onclick="bl()">
			<input type="submit" name="register" value="register now" class="btn" onclick="br()"> -->
		<a href="login.php" class="btn">login now</a>
			<a href="register.php" class="btn">register now</a>
			
		
	
      
    </form>
  <script>
		function bl(){
			header("Location: login.php");
		}
		function br(){
			echo windows.location.assign('register.php');
		}
	</script>
</header>

<!-- header section ends -->

<!-- Single-product start -->
<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/6.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label sale-label">Sale</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/7.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label sale-label">sale</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/10.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/8.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/11.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix">
															<span class="pro-rating">
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
																<a href="#"><i class="zmdi zmdi-star-half"></i></a>
															</span>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
                                            
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> NasaFurniture <i class="fas fa-shopping-basket"></i> </h3>
            <p>--detail of the company-- and location</p>
            <div class="share">
                <a target="_blank" href="#" class="fab fa-facebook-f"> </a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +01114127143 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +01113214432 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> NasaFurnatureCo@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Kuala Terengganu, Terengganu - 876877 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> NasaFurniture Company </span> | all rights reserved </div>

</section>

<!-- footer section ends -->