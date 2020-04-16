<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
     <link href="<?php echo base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/back/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reset - Document Code</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
       
        
      </div>
      <div class="login-box">
        <?php echo form_open(site_url().'auth/reset_password/token/'.$token); ?>
            <div class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          
          <div class="form-group">
            <label class="control-label">NEW PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIR PASSWORD</label>
            <input class="form-control" type="password" name="passconf" placeholder="Confirmation Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
               
              </div>
             
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
          <p align="center">
            <a href="<?php echo base_url()?>">
           <span style=" color: blue">  home </span> </a>
          </p>
        </div>
       <?php echo form_close(); ?>

       
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url()?>assets/back/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url()?>assets/back/js/plugins/pace.min.js"></script>
    
  </body>
</html>