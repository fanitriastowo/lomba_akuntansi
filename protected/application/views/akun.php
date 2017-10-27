<!doctype html>
<html lang="en">
<head>

   <?php $this->load->view('template/css'); ?>
   <link rel="stylesheet" href="<?php echo site_url('assets/css/main.css'); ?>">
   <title>Selamat datang di Lomba Akuntansi UMP 2017</title>
</head>
<body>

<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                 aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Lomba Akuntansi </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Preferensi <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Pengaturan</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div><!--/.nav-collapse -->
   </div><!--/.container-fluid -->
</nav>

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-12 lead">User profile

                     <hr>

                     <?php if ($this->session->flashdata('belum_dimulai')): ?>
                        <div class="alert alert-info alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                           Ooppsss.... Sepertinya ujian belum dibuka.
                        </div>
                     <?php endif ?>

                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 text-center">
                     <h4>Avatar</h4>
                     <img width="120"
                          class="img-circle avatar avatar-original"
                          src="<?php echo site_url("uploads/users/" . $model->photo); ?>">
                     <br>
                     <br>

                     <h4>Bukti Transfer</h4>
                     <img width="120"
                          class="img-thumbnail avatar avatar-original"
                          src="<?php echo site_url("uploads/bukti_transfer/" . $model->bukti_transfer); ?>">
                  </div>
                  <div class="col-md-8">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="only-bottom-margin"><?php echo $model->nama; ?></h1>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <span class="text-muted">Telepon:</span>
                           <?php echo $model->phone; ?><br>

                           <span class="text-muted">Tempat Tanggal Lahir:</span>
                           <?php echo $model->tempat_lahir; ?>,
                           <?php echo date('j F Y', strtotime($model->tanggal_lahir)); ?><br>

                           <span class="text-muted">Jenis Kelamin:</span>
                           <?php echo $model->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'; ?><br>

                           <span class="text-muted">Asal Sekolah:</span>
                           <?php echo $model->asal_sekolah; ?><br>

                           <span class="text-muted">Pertanyaan Anda:</span><br>
                           <?php echo $model->pertanyaan; ?><br>

                           <span class="text-muted">Jawaban:</span>
                           <strong><?php echo $model->jawaban; ?></strong><br>

                           <span class="text-muted">Kisi-kisi:</span>
                           <p>Akuntansi keuangan, akuntansi biaya, akuntansi Manajemen</p><br>

                           <small class="text-muted">Tanggal Registrasi:
                              <?php echo date('j F Y', strtotime($model->tanggal_daftar)); ?></small>
                           <br>

                           <?php // cek jika members sudah upload bukti transfer
                           switch ($model->sudah_transfer) {
                              case 0 :
                                 echo '<small class="text-muted label label-danger"> 
                                       Anda belum mengupload bukti transfer</small>';
                                 break;
                              case 1 :
                                 echo '<small class="text-muted label label-success">* 
                                       Anda sudah mengupload bukti transfer</small>';
                                 break;
                           }
                           ?>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <hr>
                     <button type="button" data-toggle="modal" data-target="#myModal"
                             class="btn btn-default pull-right">
                        <i class="glyphicon glyphicon-paperclip"></i> Upload Transfer
                     </button>
                     <a href="#"
                        class="btn btn-default pull-right">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                     </a>
                     <a class="btn btn-default pull-right"
                        target="_blank"
                        href="<?php echo site_url('akun/cetak_kwitansi'); ?>">
                        <i class="glyphicon glyphicon-print"></i> Kwitansi
                     </a>
                     <a class="btn btn-default pull-left"
                        href="<?php echo site_url('soal'); ?>">
                        <i class="glyphicon glyphicon-book"></i> Mulai Test
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<?php echo form_open_multipart('akun/upload_kwitansi', 'class="form-horizontal"'); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                       aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
         </div>
         <div class="modal-body">

            <div class="form-group">
               <label for="add_filename" class="col-sm-2 control-label">Upload:</label>
               <div class="col-sm-10">
                  <input type="file" name="bukti_transfer" id="bukti_transfer"
                         accept="image/x-png, image/gif, image/jpeg, image/jpg">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload</button>
         </div>
      </div>
   </div>
</div>
<?php echo form_close(); ?>

<?php $this->load->view('template/js'); ?>
</body>
</html>