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

   <!-- Error import Notification -->
   <?php if (!empty($this->session->flashdata('error_registration'))): ?>
      <div class="alert alert-danger" role="alert">
         <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
         </button>
         <?php echo $this->session->flashdata('error_registration'); ?>
      </div>
   <?php endif ?>

   <?php echo form_open_multipart('registration/registrasi', 'id="form-registration" class="form-horizontal"'); ?>

   <div class="form-group">
      <label for="nama" class="text-muted col-sm-2 control-label">Nama:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'nama', 'name' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Lengkap')); ?>
      </div>
   </div>

   <div class="form-group">
      <label for="jenis_kelamin" class="text-muted col-sm-2 control-label">Jenis Kelamin:</label>
      <div class="col-sm-10">
         <select class="form-control" name="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
         </select>
      </div>
   </div>


   <div class="form-group">
      <label for="tempat_lahir" class="text-muted col-sm-2 control-label">Tempat Lahir:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'tempat_lahir', 'name' => 'tempat_lahir', 'class' => 'form-control', 'placeholder' => 'Tempat Lahir')); ?>
      </div>
   </div>

   <div class="form-group">
      <label class="col-sm-2 control-label text-muted" for="tanggal_lahir">Tanggal Lahir</label>
      <div class="col-sm-10">
         <div class="form-inline">
            <select class="form-control" id="tanggal_lahir" name="tanggal_lahir">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
               <option value="31">31</option>
            </select>
            <select class="form-control" id="bulan_lahir" name="bulan_lahir">
               <option value="1">Januari</option>
               <option value="2">Februari</option>
               <option value="3">Maret</option>
               <option value="4">April</option>
               <option value="5">Mei</option>
               <option value="6">Juni</option>
               <option value="7">Juli</option>
               <option value="8">Agustus</option>
               <option value="9">September</option>
               <option value="10">Oktober</option>
               <option value="11">November</option>
               <option value="12">Desember</option>
            </select>
            <select class="form-control" id="tahun_lahir" name="tahun_lahir">
               <option value="2010">2010</option>
               <option value="2009">2009</option>
               <option value="2008">2008</option>
               <option value="2007">2007</option>
               <option value="2006">2006</option>
               <option value="2005">2005</option>
               <option value="2004">2004</option>
               <option value="2003">2003</option>
               <option value="2002">2002</option>
               <option value="2001">2001</option>
               <option value="2000">2000</option>
               <option value="1999">1999</option>
               <option value="1998">1998</option>
               <option value="1997">1997</option>
               <option value="1996">1996</option>
               <option value="1995">1995</option>
               <option value="1994">1994</option>
               <option value="1993">1993</option>
               <option value="1992">1992</option>
               <option value="1991">1991</option>
               <option value="1990">1990</option>
               <option value="1989">1989</option>
               <option value="1988">1988</option>
               <option value="1987">1987</option>
               <option value="1986">1986</option>
               <option value="1985">1985</option>
               <option value="1984">1984</option>
               <option value="1983">1983</option>
               <option value="1982">1982</option>
               <option value="1981">1981</option>
               <option value="1980">1980</option>
               <option value="1979">1979</option>
               <option value="1978">1978</option>
               <option value="1977">1977</option>
               <option value="1976">1976</option>
               <option value="1975">1975</option>
               <option value="1974">1974</option>
               <option value="1973">1973</option>
               <option value="1972">1972</option>
               <option value="1971">1971</option>
               <option value="1970">1970</option>
               <option value="1969">1969</option>
               <option value="1968">1968</option>
               <option value="1967">1967</option>
               <option value="1966">1966</option>
               <option value="1965">1965</option>
               <option value="1964">1964</option>
               <option value="1963">1963</option>
               <option value="1962">1962</option>
               <option value="1961">1961</option>
               <option value="1960">1960</option>
            </select>
         </div>
      </div>
   </div>

   <div class="form-group">
      <label for="no_handphone" class="text-muted col-sm-2 control-label">No Handphone:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'no_handphone', 'name' => 'no_handphone', 'class' => 'form-control', 'placeholder' =>
             'No Handphone')); ?>
      </div>
   </div>

   <div class="form-group">
      <label for="jalan" class="text-muted col-sm-2 control-label">Jalan:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'jalan', 'name' => 'jalan', 'class' => 'form-control', 'placeholder' => 'Jalan')); ?>
      </div>
   </div>

   <div class="form-group">
      <label class="col-sm-2 control-label text-muted" for="no_rumah">No Rumah</label>
      <div class="col-sm-2">
         <div class="form-inline">
            <?php echo form_input(array('id' => 'no_rumah', 'name' => 'no_rumah', 'class' => 'form-control', 'placeholder' => 'No Rumah')); ?>
         </div>
      </div>

      <label class="col-sm-2 control-label text-muted" for="rt">RT</label>
      <div class="col-sm-2">
         <div class="form-inline">
            <?php echo form_input(array('id' => 'rt', 'name' => 'rt', 'class' => 'form-control', 'placeholder' => 'RT')); ?>
         </div>
      </div>

      <label class="col-sm-2 control-label text-muted" for="rw">RW</label>
      <div class="col-sm-2">
         <div class="form-inline">
            <?php echo form_input(array('id' => 'rw', 'name' => 'rw', 'class' => 'form-control', 'placeholder' => 'RW')); ?>
         </div>
      </div>
   </div>


   <div class="form-group">
      <label for="desa" class="text-muted col-sm-2 control-label">Kelurahan:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'desa', 'name' => 'desa', 'class' => 'form-control', 'placeholder' => 'Desa / Kelurahan')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="kecamatan" class="text-muted col-sm-2 control-label">Kecamatan:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'kecamatan', 'name' => 'kecamatan', 'class' => 'form-control', 'placeholder' => 'Kecamatan')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="kabupaten" class="text-muted col-sm-2 control-label">Kabupaten:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'kabupaten', 'name' => 'kabupaten', 'class' => 'form-control', 'placeholder' => 'Kabupaten')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="provinsi" class="text-muted col-sm-2 control-label">Provinsi:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'provinsi', 'name' => 'provinsi', 'class' => 'form-control', 'placeholder' => 'Provinsi')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="asal_sekolah" class="text-muted col-sm-2 control-label">Asal Sekolah:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'asal_sekolah', 'name' => 'asal_sekolah', 'class' => 'form-control', 'placeholder' => 'Asal Sekolah')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="desa" class="text-muted col-sm-2 control-label">Jenis Sekolah:</label>
      <div class="col-sm-10">
         <label class="radio-inline">
            <input type="radio" name="jenis_sekolah" id="jenis_sekolah" value="1"> SMA / MA
         </label>
         <label class="radio-inline">
            <input type="radio" name="jenis_sekolah" id="jenis_sekolah" value="2"> SMK
         </label>
      </div>
   </div>

   <div class="form-group">
      <label for="password" class="text-muted col-sm-2 control-label">Password:</label>
      <div class="col-sm-10">
         <?php echo form_password(array('id' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="confirm_password" class="text-muted col-sm-2 control-label">Confirm Password:</label>
      <div class="col-sm-10">
         <?php echo form_password(array('id' => 'confirm_password', 'name' => 'confirm_password', 'class' => 'form-control', 'placeholder' => 'Confirm Password')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="pertanyaan" class="text-muted col-sm-2 control-label">Pertanyaan:</label>
      <div class="col-sm-10">
         <?php echo form_textarea(array('id' => 'pertanyaan', 'name' => 'pertanyaan', 'class' => 'form-control',
             'placeholder' => 'Silahkan masukan pertanyaan yang hanya Anda yang mengetahui jawabannya. Hal ini agar memastikan keamanan akun', 'rows' => 2, 'style' => 'resize: none;')); ?>
      </div>
   </div>


   <div class="form-group">
      <label for="jawaban" class="text-muted col-sm-2 control-label">Jawaban:</label>
      <div class="col-sm-10">
         <?php echo form_input(array('id' => 'jawaban', 'name' => 'jawaban', 'class' => 'form-control', 'placeholder' => 'Jawaban dari pertanyaan diatas')); ?>
      </div>
   </div>

   <div class="form-group">
      <label for="photo" class="text-muted col-sm-2 control-label">Foto:</label>
      <div class="col-sm-10">
         <input type="file" name="photo" id="photo"
                accept="image/x-png, image/gif, image/jpeg, image/jpg">
      </div>
   </div>

   <div class="form-group">
      <label for="photo" class="text-muted col-sm-2 control-label"></label>
      <div class="col-sm-10">
         <div class="checkbox">
            <label>
               <input type="checkbox" name="setuju"> Setuju untuk mematuhi semua peraturan yang ada
            </label>
         </div>
      </div>
   </div>


   <div class="form-group">
      <label for="photo" class="text-muted col-sm-2 control-label"></label>
      <div class="col-sm-10">
         <button type="submit" class="btn btn-primary">Registrasi</button>
      </div>
   </div>

   <?php echo form_close(); ?>
</div>

<?php $this->load->view('template/js'); ?>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript">
   $(document).ready(function () {

      // Form Validation
      $('#form-registration').validate({
         rules: {
            nama: {
               required: true,
               minlength: 3
            },
            tempat_lahir: {
               required: true
            },
            phone: {
               required: true,
               min: 10,
               number: true
            },
            asal_sekolah: {
               required: true
            },
            jenis_sekolah: {
               required: true
            },
            password: {
               required: true,
               minlength: 3
            },
            confirm_password: {
               required: true,
               minlength: 3,
               equalTo: "#password"
            },
            pertanyaan: {
               required: true,
               minlength: 3
            },
            jawaban: {
               required: true,
               minlength: 3
            }
         },
         messages: {
            nama: {
               required: "Nama harus diisi",
               minlength: "Minimal 3 Karakter"
            },
            tempat_lahir: {
               required: "Tempat lahir harus diisi"
            },
            phone: {
               required: "Nomor Telepon harus diisi",
               min: "Minimal 10 Karakter",
               number: "Harus berupa angka"
            },
            asal_sekolah: {
               required: "Asal sekolah harus diisi"
            },
            jenis_sekolah: {
               required: "Jenis Sekolah harus diisi"
            },
            password: {
               required: "Password harus diisi",
               minlength: "Minimal 3 karakter"
            },
            confirm_password: {
               required: "Confirm Password harus diisi",
               minlength: "Minimal 3 karakter",
               equalTo: "Password tidak sama"
            },
            pertanyaan: {
               required: "Pertanyaan harus diisi",
               minlength: "Minimal 3 karakter"
            },
            jawaban: {
               required: "Jawaban harus diisi",
               minlength: "minimal 3 karakter"
            }
         },
         errorPlacement: function (error, element) {
            var spot = $(element).closest('.form-group');
            error.insertBefore(spot);
         },
         highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
         },
         unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
         }
      });
   });
</script>
</body>
</html>