<?php include 'header.php'; ?>


<div class="container mt-2 rounded">
	<div class="cart p-3">
	    <div class="row no-gutters">
	        <div class="col-md-8">
	            <div class="mr-2">
	                <div class="d-flex flex-row align-items-center"><span class="ml-2">Shopping cart</span></div>
	                <hr>
	                <div class="d-flex justify-content-between">
	                	<span>You have 4 items in your cart</span>   
	                </div>
	                <?php for($x = 1; $x <= 4; $x++) { ?>
	                <div class="d-lg-flex justify-content-between align-items-center mt-3 p-2 items rounded">
	                    <div class="d-flex flex-row mb-1"><img class="rounded" src="https://i.imgur.com/QRwjbm5.jpg" width="40">
	                        <div class="ml-2"><span class="d-block">Iphone 11 pro</span><span class="spec">256GB, Navy Blue</span></div>
	                    </div>
	                    <div class="d-flex flex-row align-items-center">
	                    	<button onclick="var result = document.getElementById('qty1<?php echo $x;?>'); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) { result.value--; } else{ result.value = 1;} jQuery('#qty1<?php echo $x;?>').trigger('change'); return false;" class="cart-qty-btn" type="button"><i class="fa fa-minus">&nbsp;</i></button>

                            <input type="number" id="qty1<?php echo $x;?>" class="qty cart-qty-input" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" inputmode="numeric" />

                            <button onclick="var result = document.getElementById('qty1<?php echo $x;?>'); var qty = result.value; if( !isNaN( qty )) { result.value++;} else { result.value = 1 } jQuery('#qty1<?php echo $x;?>').trigger('change'); return false;" class="cart-qty-btn" type="button"><i class="fa fa-plus">&nbsp;</i></button>

	                    	<span class="d-block ml-5">$900</span>
	                    	<a href="#"><i class="fa fa-trash-o ml-3 text-black-50 text-danger"></i></a>
	                    </div>
	                </div>
	               <?php } ?>
	            </div>
	        </div><!-- End Col- 8-->
	        <div class="col-md-4">
	            <div class="cart-payment-info">
	            	<div class="card mb-3">
		                <div class="card-body">
		                    <form>
		                        <div class="form-group"> 
		                        	<label>Have coupon?</label>
		                            <div class="input-group">
			                             <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> 
			                             <span class="input-group-append"> <button class="btn btn-danger btn-apply coupon">Apply</button> </span>
	                            	</div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		            <div class="card">
		                <div class="card-body">
		                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>$3000.00</span></div>
			                <div class="d-flex justify-content-between information"><span>Shipping</span><span>$20.00</span></div>
			                <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>$3020.00</span></div>
		                    <br> <br><hr>
		                    <a href="#" class="btn  btn-danger btn-square btn-block" data-abc="true"> Checkout </a> 
		                    <a href="#" class="btn  btn-info btn-square btn-block mt-2" data-abc="true">Continue Shopping</a>
		                </div>
		            </div>
	            </div>
	        </div><!-- End Col 4 -->
	    </div>
	</div>
</div>

<?php include 'footer.php'; ?>