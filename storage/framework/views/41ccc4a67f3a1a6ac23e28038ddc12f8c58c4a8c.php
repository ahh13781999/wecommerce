

<?php $__env->startSection('main'); ?>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <form name="frm-login">
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Log in to your account</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input type="text" id="frm-login-uname" name="email"
                                            placeholder="Type your email address">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password:</label>
                                        <input type="password" id="frm-login-pass" name="pass" placeholder="************">
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="rememberme" id="rememberme" value="forever"
                                                type="checkbox"><span>Remember me</span>
                                        </label>
                                        <a class="link-function left-position" href="#"
                                            title="Forgotten password?">Forgotten password?</a>
                                    </fieldset>
                                    <input type="submit" class="btn btn-submit" value="Login" name="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
								<form class="form-stl" action="#" name="frm-login" method="get" >
									<fieldset class="wrap-title">
										<h3 class="form-title">Create an account</h3>
										<h4 class="form-subtitle">Personal infomation</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">Name*</label>
										<input type="text" id="frm-reg-lname" name="reg-lname" placeholder="Last name*">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email Address*</label>
										<input type="email" id="frm-reg-email" name="reg-email" placeholder="Email address">
									</fieldset>
									<fieldset class="wrap-functions ">
										<label class="remember-field">
											<input name="newletter" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
										</label>
									</fieldset>
									<fieldset class="wrap-title">
										<h3 class="form-title">Login Information</h3>
									</fieldset>
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Password *</label>
										<input type="text" id="frm-reg-pass" name="reg-pass" placeholder="Password">
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Confirm Password *</label>
										<input type="text" id="frm-reg-cfpass" name="reg-cfpass" placeholder="Confirm Password">
									</fieldset>
									<input type="submit" class="btn btn-sign" value="Register" name="register">
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Wcommerce\resources\views/login-register.blade.php ENDPATH**/ ?>