<?php include 'header.php'; ?>


<div class="container-fluid py-3 mt-2">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body wrapper-fluid-padding">
                <h4 class="text-center mt-2 mb-0">Sign-up</h4>

                <hr>

                <div class="alert alert-danger">
                    <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                </div>

                <div class="form-group has-error">
                    <input class="form-control form-control-lg" placeholder="E-mail Address" name="email" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Password" name="password" value="" type="password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Confirm Password" name="password" value="" type="password">
                </div>
                
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Phone Number" name="phone" value="" type="text">
                </div>
                <div class="checkbox">
                    <label class="small">
                        <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of service</a>
                    </label>
                </div>

                <button class="btn btn-md btn-danger btn-block mt-2" type="submit">Signup </button>

                <hr>

                <p class="mx-auto">Do you have an account? <a class="text-danger" href="login.php">Login</a></p>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>