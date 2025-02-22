<?php include 'header.php'; ?>

<div class="container-fluid mt-2">
	<div class="row container-fluid">
		<div class="col-lg-3 col-md-3">
			<div class="wrapper-fluid">
				<div class="wrapper-fluid-title">
					<span class="h3">Apply Filter</span>
				</div>
			</div>
		</div><!-- End Col -3  -->
		<div class="col-lg-9 col-md-9">
			<div class="wrapper-fluid">
				<div class="wrapper-fluid-title">
					<span class="h3">Product</span>
				</div>
				<div class="wrapper-fluid-padding">
					<div class="row">
						<?php for ($x = 1; $x <=20; $x++) { ?>
				        <div class="col-lg-3 col-6 col-md-4">
				            <div class="product-grid2 mb-1 mt-2">
				                <div class="product-image2 mx-auto mw-100 mh-100">
				                    <a href="#">
				                        <img class="pic-1" src="assets/images/product/women-dress.jpeg">
				                    </a>
				                    <ul class="social">
				                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
				                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
				                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
				                    </ul>
				                    <a class="add-to-cart" href="">Details</a>
				                </div>
				                <div class="product-content">
				                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
				                    <span class="price">$599.99</span>
				                </div>
				            </div>
				        </div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- End col-9 -->
	</div>
</div>


<?php include 'footer.php'; ?>