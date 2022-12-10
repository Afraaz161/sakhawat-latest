<!DOCTYPE html>
<html lang="en">
<head>
	<title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon.ico')); ?>"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/fonts/iconic/css/material-design-iconic-font.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/util.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/main.css')); ?>">
<style>
#messages{
	margin-bottom: 20px !important;
}
</style>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	<div class="container-login100" style="background-image: url('<?php echo e(asset("login/images/bg-01.jpg")); ?>');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="<?php echo e(route('check-credentials')); ?>">
					<?php echo csrf_field(); ?>
						<span class="login100-form-title p-b-49">
							
							<img src="<?php echo e(asset('https://wearewebeasy.com/wp-content/uploads/2020/01/logopng.png')); ?>" alt="No Image" style="width:300px;">
						</span>
					<div class="messages" style="margin-bottom:20px !important;">
						<?php echo $__env->make('include/messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" value="<?php echo e(old('email')); ?>" type="text" name="email" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/bootstrap/js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/daterangepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('login/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\Users\King-PC\Desktop\projects\sakhawat\resources\views/front/login.blade.php ENDPATH**/ ?>