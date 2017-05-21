<?php 
if(isset($data['role'])):
  if($data['role'] == 0) { redirect('dashboard'); } 
  if($data['role'] == 1) { redirect('home'); } 
endif;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo$url?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo$url?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="<?php echo$url?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo$url?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo$url?>assets/plugins/select2/select2.min.css">
  <!-- animated -->
  <link href="<?php echo$url?>assets/plugins/animate/animate.min.css" rel="stylesheet">
  <style type="text/css">.costum{height:100px !important; resize:none;}</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav" ng-app="app">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b><?php echo$title?></b></a>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
<section class="content">

	<div class="row">
	    <div class="col-md-8">
	      	<div class="box box-solid">
	        	<div class="box-header with-border">
	          		<h3 class="box-title">Sign up to fakebook</h3>
	        	</div>
	        	<!-- start -->
	        	<div class="box-body">
	        		<form method="POST" name="register" novalidate>
	        			<div class="form-group has-feedback"> 
			                <label>Last name
				                <strong ng-messages="register.lastname.$error" ng-if="register.lastname.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <input type="text" class="form-control flat" name="lastname" id="lastname" ng-model="lastname" required >
					       	<span class="glyphicon glyphicon-user form-control-feedback"></span>
			            </div>

		              	<div class="form-group has-feedback"> 
			                <label>First name
				                <strong ng-messages="register.firstname.$error" ng-if="register.firstname.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <input type="text" class="form-control flat" name="firstname" id="firstname" ng-model="firstname" required >
					       	<span class="glyphicon glyphicon-user form-control-feedback"></span>
		              	</div>

		              	<div class="form-group has-feedback"> 
			                <label>Email
				                <strong ng-messages="register.email.$error" ng-if="register.email.$dirty">
				                  <strong ng-message="pattern" class="label label-danger">Please enter a valid email.</strong>
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <input type="email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" class="form-control flat" 
			                name="email" id="email" ng-model="email" required >
					       	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		              	</div>

		              	<div class="form-group has-feedback"> 
			                <label>Gender
				                <strong ng-messages="register.gender.$error" ng-if="register.gender.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <select name="gender" id='gender' class="form-control" required ng-model='gender'>
			                	<option value='' selected> Select Gender </option>
			                	<option value='Male'>Male</option>
			                	<option value='Female'>Female</option>
			                </select>
		              	</div>

		              	<div class="form-group "> 
			                <label>Birth Day
				                <strong ng-messages="register.birthday.$error" ng-if="register.birthday.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <input type="date" class="form-control flat" name="birthday" id="birthday" ng-model="birthday" required >
		              	</div>

		              	<div class="form-group has-feedback"> 
			                <label>Username
				                <strong ng-messages="register.username.$error" ng-if="register.username.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                </strong>
			                </label>
			                <input type="text" class="form-control flat" name="username" id="username" ng-model="username" required >
					       	<span class="glyphicon glyphicon-user form-control-feedback"></span>
		              	</div>

		              	<div class="form-group has-feedback"> 
			                <label>Password
				                <strong ng-messages="register.password.$error" ng-if="register.password.$dirty">
				                  <strong ng-message="required" class="label label-danger">This field is required.</strong>
				                  <strong ng-message="minlength" class="label label-danger">Password is too short.</strong>
				                </strong>
			                </label>
			                <input type="password" class="form-control flat" ng-minlength="6" name="password" id="password" ng-model="password" required >
					       	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		              	</div>

		              	 <div class="form-group has-feedback">
					       	 <button type="submit" id="register" ng-disabled="!register.$valid" 
					       	 class="btn btn-primary flat pull-right"><i class="fa fa-user-plus"></i> Create New Account </button>
					    </div>

	        		</form>
	        	</div>
	        	<!-- end -->
	      	</div>

	    </div>


      	<div class="col-md-4">
	      	<div class="box box-solid">
	        	<div class="box-header with-border">
	          		<h3 class="box-title">Sign in to Fakebook</h3>
	        	</div>
	        	<!-- start -->
	        	<div class="box-body">
	        		
	        		<form method="POST" name="login">
		        		 <div class="form-group has-feedback"> 
			                <label>Username
				                <strong ng-messages="login.uname.$error" ng-if="login.uname.$dirty">
				                  <strong ng-message="required" class="label label-danger">Username is required.</strong>
				                </strong>
			                </label>
			                <input type="text" class="form-control flat" name="uname" id="uname" ng-model="uname" required >
					       	<span class="glyphicon glyphicon-user form-control-feedback"></span>
			              </div>

					    <div class="form-group has-feedback"> 
			                <label>Password
				                <strong ng-messages="login.pword.$error" ng-if="login.pword.$dirty">
				                  <strong ng-message="required" class="label label-danger">Password is required.</strong>
				                </strong>
			                </label>
			                <input type="password" class="form-control flat" name="pword" id="pword" ng-model="pword" required >
					       	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			              </div>


					    <div class="form-group has-feedback">
					       	 <button type="submit" id="btn-login" ng-disabled="!login.$valid" 
					       	 class="btn btn-primary flat pull-right">Login <i class="fa fa-arrow-right"></i></button>
					    </div>
				    </form>

	        	</div>
	        	<!-- end -->
	      	</div>

	    </div>

	    <div class="col-md-4" id='notif'></div>


  	</div>

</section>
     
      
       <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo$url?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo$url?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo$url?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo$url?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo$url?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo$url?>assets/dist/js/demo.js"></script>
<!-- Angular Js -->
<script src="<?php echo$url?>assets/angular/1.4.8.angular.min.js"></script>
<script src="<?php echo$url?>assets/angular/1.4.2.angular.min.js"></script>
<!-- Select2 -->
<script src="<?php echo$url?>assets/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript" src='<?php echo$url?>assets/functions/execute.js'></script>
<script type="text/javascript">
	register();
	login();
</script>
<!-- <script type="text/javascript">
	function AutoAdjust(e) {
		e.style.height = '100px';
		e.style.height = e.scrollHeight + 'px';
	}
</script> -->
</body>
</html>
