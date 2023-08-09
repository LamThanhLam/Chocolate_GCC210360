  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/iphone-case-wood-ultra-slim-12-pro-walnut-.jpg" alt="Slide" style="width:40%">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">12/12 <strong>Pro Case Wood Ultra Slim</strong></span>
							</h2>
							<h4 class="caption subtitle">Made of walnut</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/Wooden Samsung Case.jpg" alt="Slide" style="width:40%">
						<div class="caption-group">
							<h2 class="caption title">
								Samsung <span class="primary">Galaxy <strong>A71 Olive Wood Case</strong></span>
							</h2>
							<h4 class="caption subtitle">Made of Olive tree</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/iphone-case-wood-ultra-slim-14-pro-max-walnut-.jpg" alt="Slide" style="width:40%">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">14 <strong>Pro Max Case Wood Ultra Slim</strong></span>
							</h2>
							<h4 class="caption subtitle">Made of walnut</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/Wooden Oppo Case.jpg" alt="Slide" style="width:40%">
						<div class="caption-group">
						  <h2 class="caption title">
								Oppo <span class="primary">Reno 6 5G <strong>Oak Wood Case</strong></span>
							</h2>
							<h4 class="caption subtitle">Made of Oak tree</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Introduction of functions-->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load product from DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--One product -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?page=detail&&id=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand001.png" alt="">
                            <img src="img/brand002.png" alt="">
                            <img src="img/brand003.png" alt="">
                            <img src="img/brand004.png" alt="">
                            <img src="img/brand005.png" alt="">
                            <img src="img/brand006.png" alt="">
                            <img src="img/brand007.png" alt="">                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->