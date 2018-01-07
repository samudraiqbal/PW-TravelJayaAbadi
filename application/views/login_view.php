<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Admin | Travel - Jaya Abadi</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/sweetalert2.min.js"></script>

</head>

<body>

  <div class="login">
	<h1>Login Admin</h1>
	<h3 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;">Travel - Jaya Abadi</h3>
	<?php
	if(!empty($notif)){
		echo '<script type="text/javascript">
				$( document ).ready(function() {
				    swal("Login Gagal !","", "error")
				});
			</script>';

	}?>
    <form action="<?php echo base_url();?>login/masuk" method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Login" />
    </form>
</div>
  
  
	<script src="<?php echo base_url();?>assets/dist/js/sweetalert2.all.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/login.js"></script>




</body>

</html>
