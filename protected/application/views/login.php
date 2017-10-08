<!DOCTYPE html>
<html>
<head>
   <title>Silahkan Login</title>

   <?php $this->load->view('template/css'); ?>
   <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css'); ?>">
</head>
<body>

<!-- LOGIN SECTION -->
<section id="login">
   <div class="container">
      <div class="row">

         <div class="col-sm-offset-3 col-sm-6">

            <?php if (($this->session->flashdata('invalid'))): ?>
               <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <strong>Nomor ID tidak ditemukan</strong>
               </div>
            <?php endif ?>

            <?php if (($this->session->flashdata('sudah_ujian'))): ?>
               <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <strong>Nomor ID Anda sudah ujian</strong>
               </div>
            <?php endif ?>

            <!-- LOGO -->
            <a href="https://ump.ac.id/" title="Universitas Muhammadiyah Purwokerto" target="_blank">
               <img class="center-block" src="<?php echo site_url('assets/images/logo.png') ?>" alt="Logo">
            </a>

            <!-- LOGIN BOX -->
            <div class="account-wall">
               <img class="profile-img" src='<?php echo site_url('assets/images/user-blank.jpg'); ?>' alt="User Avatar">

               <?php echo form_open('login/login_post', array('class' => 'form-signin')); ?>

               <?php echo form_input(array('name' => 'username', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Nomor ID', 'required' => '', 'autofocus' => '')); ?>
               <?php echo form_password(array('name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => '')); ?>

               <?php echo form_submit('submit', 'Login', 'class="btn btn-lg btn-primary btn-block"'); ?>

               <?php echo form_close(); ?>
            </div>

         </div>

      </div>
   </div>
</section>

<?php $this->load->view('template/js'); ?>
</body>
</html>
