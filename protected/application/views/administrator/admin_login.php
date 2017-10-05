<!DOCTYPE html>
<html>
<head>
   <title>Login Administrator</title>

   <?php $this->load->view('template/css'); ?>
   <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css'); ?>">
</head>
<body>

<!-- LOGIN SECTION -->
<section id="login">
   <div class="container">
      <div class="row">

         <?php if (($this->session->flashdata('invalid'))): ?>
         <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Username atau Password tidak valid</strong>
         </div>
         <?php endif ?>

         <?php if (($this->session->flashdata('not_admin'))): ?>
         <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Gunakan Akun Administrator, Akun Anda bukan sebagai Admin</strong>
         </div>
         <?php endif ?>

         <div class="col-sm-6 col-md-4 col-md-offset-4">

            <h2 class="text-center">Login Administrator</h2>
            
            <!-- LOGIN BOX -->
            <div class="account-wall">


               <img
                  class="profile-img"
                  src='<?php echo site_url('assets/images/user-blank.jpg'); ?>'
                  alt="User Avatar">

               <?php echo form_open('administrator/login_post', array('class' => 'form-signin')); ?>

                  <?php echo form_input(array('name' => 'username', 'id' => 'username', 'value' => '', 'class' => 'form-control', 'placeholder' => 'Username', 'required' => '', 'autofocus' => '')); ?>

                  <?php echo form_password(array('name' => 'password', 'id' => 'password', 'value' => '', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => '')); ?>
                     
                  <?php echo form_submit('submit', 'Masuk', 'class="btn btn-lg btn-primary btn-block"'); ?>

               <?php echo form_close(); ?>
            </div>

         </div>
      </div>
   </div>
</section>
<?php $this->load->view('template/js'); ?>
</body>
</html>