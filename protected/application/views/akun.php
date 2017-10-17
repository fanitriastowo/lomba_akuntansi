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
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
         </ul>
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
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 text-center">
                     <img width="120"
                          class="img-circle avatar avatar-original"
                          style="-webkit-user-select:none; display:block; margin:auto;"
                          src="<?php echo site_url("uploads/users/" . $model->photo); ?>">
                     <br>
                     <img width="120"
                          class="img-circle avatar avatar-original"
                          style="-webkit-user-select:none; display:block; margin:auto;"
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

                           <br>

                           <small class="text-muted">Tanggal Registrasi:
                              <?php echo date('j F Y', strtotime($model->tanggal_daftar)); ?></small>
                           <br>

                           <?php // cek jika members sudah upload bukti transfer
                           switch ($model->sudah_transfer) {
                              case 0 :
                                 echo '<small class="text-muted label label-danger">* Anda belum mengupload bukti transfer</small>';
                                 break;
                              case 1 :
                                 echo '<small class="text-muted label label-success">* Anda sudah mengupload bukti transfer</small>';
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
                     <a href="#"
                        class="btn btn-default pull-right">
                        <i class="glyphicon glyphicon-paperclip"></i> Upload Transfer
                     </a>
                     <a href="#"
                        class="btn btn-default pull-right">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                     </a>
                     <a class="btn btn-default pull-right"
                        target="_blank"
                        href="<?php echo site_url('akun/cetak_kwitansi'); ?>">
                        <i class="glyphicon glyphicon-print"></i> Kwitansi
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('template/js'); ?>
</body>
</html>