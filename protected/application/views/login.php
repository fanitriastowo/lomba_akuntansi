<!DOCTYPE html>
<html>
<head>
   <title>Silahkan Login | CBT</title>

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
            <strong>No Pendaftaran tidak ditemukan</strong>
         </div>
         <?php endif ?>

         <?php if (($this->session->flashdata('sudah_ujian'))): ?>
         <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <strong>Nomor ID Anda sudah ujian</strong>
         </div>
         <?php endif ?>

          <div class="col-sm-offset-1 col-sm-4">

            <!-- LOGO -->
            <a href="https://ump.ac.id/" title="Universitas Muhammadiyah Purwokerto" target="_blank">
               <img class="center-block" src="<?php echo site_url('assets/images/logo.png') ?>" alt="Logo">
            </a>

            <!-- LOGIN BOX -->
            <div class="account-wall">
               <img
                  class="profile-img"
                  src='<?php echo site_url('assets/images/user-blank.jpg'); ?>'
                  alt="User Avatar">

               <?php echo form_open('login/login_post', array('class' => 'form-signin')); ?>

                  <?php echo form_input(array('name' => 'username', 'id' => 'username', 'value' => '', 'class' => 'form-control', 'placeholder' => 'No Pendaftaran', 'required' => '', 'autofocus' => '')); ?>

                  <?php echo form_submit('submit', 'Masuk', 'class="btn btn-lg btn-primary btn-block"'); ?>
                  
               <?php echo form_close(); ?>
            </div>

         </div>
         
         <div class="col-sm-1">
            <span class="line"></span>
         </div>
         <div class="col-sm-5">
            <strong>Petunjuk Pengerjaan CBT</strong>
            <hr>
            <ol>
                <li>Berdoalah sebelum memulai Ujian</li>
                <li>Inputkan Nomor Pendaftaran pada form login disamping</li>
                <li>Pilihkan jawaban yang dianggap tepat langsung pada huruf jawaban</li>
                <li>Pastikan setiap kali menjawab muncul notifikasi berwarna biru <span class="label label-info">"Jawaban Tersimpan"</span></li>
                <li>Hubungi petugas apabila notifikasi berwarna merah <span class="label label-danger">"Jawaban Tidak Tersimpan"</span></li>
                <li>Tombol <span class="label label-success">Simpan</span> akan muncul setelah semua jawaban terjawab.</li>
                <li>Dimohon untuk mengisi Quisioner setelah selesai mengerjakan</li>
                <li>Peserta ujian dapat meninggalkan ruangan dan menemui petugas di Entry Data untuk mengetahui hasil ujian</li>
            </ol>
         </div>
         
      </div>
   </div>
</section>
<?php $this->load->view('template/js'); ?>
</body>
</html>
