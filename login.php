<?php include 'header.php'; ?>


<div class="container-fluid py-3 mt-2">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body wrapper-fluid-padding" >
                <h4 class="text-center mt-2 mb-0">Log in</h4>
                <hr>
                <div class="alert alert-danger">
                    <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Email & Password Incorrect.
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="E-mail Address" name="email" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Password" name="password" value="" type="password">
                </div>

                <button class="btn btn-md btn-danger btn-block mt-2" type="submit">Login </button>

                <hr>

                <p class="mx-auto">Create an account? <a class="text-danger" href="signup.php">Sign up</a></p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>