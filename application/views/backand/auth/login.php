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
    <title>Login - Document Code</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
      
      </div>
      <div class="login-box">
        
         <?php echo form_open('masuk'); ?>
         <div class="login-form">
       
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <?php
         $arr = $this->session->flashdata();
          if(!empty($arr['flash_message'])){
              $html = '<div class="bg-danger  flash-message ">';
              $html .= $arr['flash_message'];
              $html .= '</div>';
              echo $html;
          }
      ?>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="Email" name="email" placeholder=" " autofocus required >
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder=" " required >
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                
                  <p class="semibold-text mb-2"><a href="<?php echo base_url()?>daftar" >Create Acount ?</a></p>
               
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
           <p align="center">
            <a href="<?php echo base_url()?>">
           <span style=" color: blue">  home </span> </a>
          </p>
           </div>
         <?php echo form_close(); ?>

         <?php echo form_open(site_url().'lupa/'); ?>
         <div class="forget-form">
       
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required >
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
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
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>