<!doctype html>
<html lang="en">
<head>
   <?php $this->load->view('template/css'); ?>
   <title>Document</title>

   <style>
      .container {
         padding-bottom: 30px;
      }
   </style>
</head>
<body>
<div class="container">

   <h1 class="text-center">Registrasi</h1>
   <p class="text-center">*Silahkan isi form registrasi dibawah ini untuk mendaftar</p>

   <?php echo form_open('registration/registrasi'); ?>

   <div class="form-group">
      <?php echo form_input(array('id' => 'nama', 'name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Lengkap')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'jenis_kelamin', 'name' => 'jenis_kelamin', 'class' => 'form-control', 'placeholder' => 'Jenis Kelamin')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'tempat_lahir', 'name' => 'tempat_lahir', 'class' => 'form-control', 'placeholder' => 'Tempat Lahir')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'tanggal_lahir', 'name' => 'tanggal_lahir', 'class' => 'form-control', 'placeholder' => 'Tanggal Lahir')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'no_handphone', 'name' => 'no_handphone', 'class' => 'form-control', 'placeholder' =>
          'No Handphone')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'jalan', 'name' => 'jalan', 'class' => 'form-control', 'placeholder' => 'Jalan')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'no_rumah', 'name' => 'no_rumah', 'class' => 'form-control', 'placeholder' => 'No Rumah')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'rt', 'name' => 'rt', 'class' => 'form-control', 'placeholder' => 'RT')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'rw', 'name' => 'rw', 'class' => 'form-control', 'placeholder' => 'RW')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'desa', 'name' => 'desa', 'class' => 'form-control', 'placeholder' => 'Desa / Kelurahan')); ?>
   </div>


   <div class="form-group">
      <?php echo form_input(array('id' => 'kecamatan', 'name' => 'kecamatan', 'class' => 'form-control', 'placeholder' => 'Kecamatan')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'kabupaten', 'name' => 'kabupaten', 'class' => 'form-control', 'placeholder' => 'Kabupaten')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'provinsi', 'name' => 'provinsi', 'class' => 'form-control', 'placeholder' => 'Provinsi')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'asal_sekolah', 'name' => 'asal_sekolah', 'class' => 'form-control', 'placeholder' => 'Asal Sekolah')); ?>
   </div>


   <div class="form-group">
      <input type="text" name="sma" placeholder="SMA" class="form-control">
   </div>

   <div class="form-group">
      <input type="text" name="smk" placeholder="SMK" class="form-control">
   </div>

   <div class="form-group">
      <?php echo form_password(array('id' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')); ?>
   </div>

   <div class="form-group">
      <?php echo form_password(array('id' => 'confirm_password', 'name' => 'confirm_password', 'class' => 'form-control', 'placeholder' => 'Confirm Password')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'pertanyaan', 'name' => 'pertanyaan', 'class' => 'form-control', 'placeholder' => 'Pertanyaan')); ?>
   </div>

   <div class="form-group">
      <?php echo form_input(array('id' => 'jawaban', 'name' => 'jawaban', 'class' => 'form-control', 'placeholder' => 'Jawaban')); ?>
   </div>

   <div class="checkbox">
      <label>
         <input type="checkbox" name="setuju"> Setuju untuk mematuhi semua peraturan yang ada
      </label>
   </div>

   <button type="submit" class="btn btn-primary">Registrasi</button>

   </form>
</div>


<?php $this->load->view('template/js'); ?>
</body>
</html>