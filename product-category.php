<?php include 'header.php'; ?>

<div class="container-fluid mt-2">
	<div class="row container-fluid">
		<div class="col-lg-2 col-md-3">
			<div class="wrapper-fluid">
				<div class="card border-0">
					<article class="card-group-item">
						<div class="wrapper-fluid-title pl-4">
							<a class="collapsed" data-toggle="collapse" href="#fltercat" role="button" aria-expanded="false" aria-controls="fltercat">
								<span class="h3 text-danger">Category</span>
							</a>
						</div>
						<div class="filter-content" id="fltercat">
							<div class="card-body border-bottom">
							  <p><a href="#">Tshirt <span class="float-right badge badge-light round">142</span></a></p>
							  <p><a href="#">Polo Shirt  <span class="float-right badge badge-light round">3</span></a></p>
							  <p><a href="#">Watch <span class="float-right badge badge-light round">32</span></a></p>
							  <p><a href="#">Shoe <span class="float-right badge badge-light round">12</span>  </a></p>
							</div>  <!-- list-group .// -->
						</div>
					</article> <!-- card-group-item.// -->

					<article class="card-group-item">
						<div class="wrapper-fluid-title pl-4">
							<a class="collapsed" data-toggle="collapse" href="#fltercolor" role="button" aria-expanded="false" aria-controls="fltercolor">
								<span class="h3 text-danger">Color</span>
							</a>
						</div>
						<div class="filter-content" id="fltercolor">
							<div class="card-body border-bottom">
								<p>
								  <input class="" type="checkbox" name="myradio" value="">
								  <span class="form-check-label">Red</span>
								</p>
								<p>
								  <input class="" type="checkbox" name="myradio" value="">
								  <span class="form-check-label">Green</span>
								</p>
								<p>
								  <input class="" type="checkbox" name="myradio" value="">
								  <span class="form-check-label">Blue</span>
								</p>
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- card-group-item.// -->
				</div> <!-- card.// -->
			</div>
		</div><!-- End Col -3  -->
		<div class="col-lg-10 col-md-9">
			<div class="wrapper-fluid">
				<div class="wrapper-fluid-title">
					<span class="h3">Product</span>
				</div>
				<div class="wrapper-fluid-padding">
					<div class="row">
						<?php for ($x = 1; $x <=18; $x++) { ?>
				        <div class="col-lg-2 col-6 col-md-4">
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