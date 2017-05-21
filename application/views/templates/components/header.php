<?php
foreach ($user_data as $r):
  $udata = array(
    'id'     => $r->id,  'picture'   => $r->picture,
    'lastname' => $r->lastname, 'firstname' => $r->firstname,
    'date' => $r->date
    
    );
endforeach;
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
   <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo$title?></b></span>
    </a>
    <nav class="navbar navbar-static-top">
   
      <div class="container">

          <div class="navbar-custom-menu">
            
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $udata['picture']?>" alt="<?php echo $udata['lastname'] . ' ' . $udata['firstname']?>" class="user-image" >
                  <span class="hidden-xs"><?php echo $udata['firstname'] . ' ' . $udata['lastname']?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img class="img-circle" src="<?php echo $udata['picture']?>" alt="<?php echo $udata['lastname'] . ' ' . $udata['firstname']?>" >

                    <p>
                    <?php echo $udata['firstname'] . ' ' . $udata['lastname']?>
                      <small>Member since <?php echo $udata['date']?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat"><i class='fa fa-pencil'></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?= site_url('execute/logout')?>" class="btn btn-default btn-flat"><i class='fa fa-power-off'></i> logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>

          </div>
      </div>
      <!-- /.container-fluid -->


    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->