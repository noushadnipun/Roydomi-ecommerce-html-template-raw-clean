<div class="container-fluid mt-0"> 
    <div class="row container-fluid">
      <div class="col-12">
        <div class="wrapper-fluid">
          <div class="wrapper-fluid-title">
            <ul class="nav nav-tabs card-header-tabs product-tab" id="myTab" role="tablist">
              <li><a class="h3 active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Men's</a></li>
              <li><a class="h3" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Women's</a></li>
              <li><a class="h3" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Kid's</a></li>
            </ul>
          </div>
          <!-- Tab Content -->
          <div class="tab-content">
            <!-- Tab -1 -->
            <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
              <div class="row wrapper-fluid-padding">
                <?php for ($x = 1; $x <=12; $x++) { ?>
                  <div class="col-lg-2 col-6 col-md-4">
                      <div class="product-grid2 mb-1 mt-2">
                          <div class="product-image2 mx-auto mw-100 mh-100">
                              <a href="#">
                                  <img class="pic-1" src="assets/images/product/men-dress.jpg">
                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <a class="add-to-cart" href="">Details</a>
                          </div>
                          <div class="product-content">
                              <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                              <span class="price">$599.99</span>
                          </div>
                      </div>
                  </div>
                <?php } ?>
                <a href="#"><div class="btn btn-sm btn-danger product-tab-view-all-btn d-none d-lg-block">View All</div></a>
              </div>
            </div><!-- End Tab -1 -->

            <!-- Tab -2 -->
            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
              <div class="row wrapper-fluid-padding">
                <?php for ($x = 1; $x <=12; $x++) { ?>
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
                <a href="#"><div class="btn btn-sm btn-danger product-tab-view-all-btn d-none d-lg-block">View All</div></a>
              </div>
            </div><!-- End Tab -2 -->

            <!-- Tab -3 -->
            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
              <div class="row wrapper-fluid-padding">
                <?php for ($x = 1; $x <=12; $x++) { ?>
                  <div class="col-lg-2 col-6 col-md-4">
                      <div class="product-grid2 mb-1 mt-2">
                          <div class="product-image2 mx-auto mw-100 mh-100">
                              <a href="#">
                                  <img class="pic-1" src="assets/images/product/kid-dress.jpeg">
                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <a class="add-to-cart" href="">Details</a>
                          </div>
                          <div class="product-content">
                              <h3 class="title"><a href="#">Kid's Tshirt</a></h3>
                              <span class="price">$599.99</span>
                          </div>
                      </div>
                  </div>
                <?php } ?>
                <a href="#"><div class="btn btn-sm btn-danger product-tab-view-all-btn d-none d-lg-block">View All</div></a>
              </div>
            </div><!-- End Tab -3 -->
          </div><!-- End Tab Content -->
        </div>
      </div>
    </div>
</div>
