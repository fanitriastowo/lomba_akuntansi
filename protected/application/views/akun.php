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
                  <li><a href="#">Akun</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div><!--/.nav-collapse -->
   </div><!--/.container-fluid -->
</nav>

<div class="container">

   <h1>Your Profile</h1>
   <a href="<?php echo site_url('akun/cetak_kwitansi'); ?>" class="btn btn-success btn-xs">Cetak Kwitansi</a>

</div>

<?php $this->load->view('template/js'); ?>
</body>
</html>