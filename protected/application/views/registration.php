<!doctype html>
<html lang="en">
<head>
   <?php $this->load->view('template/css'); ?>
   <title>Document</title>
</head>
<body>
<div class="container">

   <h1 class="text-center">Registrasi</h1>
   <p class="text-center">*Silahkan isi form registrasi dibawah ini untuk mendaftar</p>

   <!--
     nama
     tempat tanggal lahir
     alamat
         jl
         no
         rt / rw
         desa / kelurahan
         kecamatan
         kabupaten
         provinsi
     asal sekolah
     no hp
     jenis kelamin
     smk / sma
     foto

     password
     pertanyaan
     jawaban

     setuju
   -->

   <form>

      <div class="form-group">
         <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="jalan" placeholder="Jalan" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="no" placeholder="No Rumah" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="rt" placeholder="RT" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="rw" placeholder="RW" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="desa" placeholder="Desa / Kelurahan" class="form-control">
      </div>


      <div class="form-group">
         <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="kabupaten" placeholder="Kabupaten" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="provinsi" placeholder="Provinsi" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="asal_sekolah" placeholder="Asal Sekolah" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="no_handphone" placeholder="No Handphone" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="smk" placeholder="SMK" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="sma" placeholder="SMA" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="password" placeholder="Password" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="confirm_password" placeholder="Confirm Password" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="pertanyaan" placeholder="Pertanyaan" class="form-control">
      </div>

      <div class="form-group">
         <input type="text" name="jawaban" placeholder="Jawaban" class="form-control">
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