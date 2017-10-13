<!DOCTYPE html>
<html>
<head>
   <title>Admin Panel</title>
   <?php $this->load->view('template/css'); ?>
</head>
<body>

   <div class="container">
      <div class="panel panel-default">
         <div class="panel-body">
         <h1 class="text-center">Daftar Peserta</h1>
         <table class="table table-condensed table-bordered table-stripes table-hovered">
            <tr>
               <th>No</th>
               <th>Nama</th>
               <th>J_K</th>
               <th>Asal Sekolah</th>
               <th>No Telp</th>
               <th>Action</th>
            </tr>
            <tr>
               <td>No</td>
               <td>Nama</td>
               <td>J_K</td>
               <td>Asal Sekolah</td>
               <td>No Telp</td>
               <td>Action</td>
            </tr>
         </table>
         </div>
         <div class="panel-footer">
         <a class="btn btn-primary btn-md btn-block" href="<?php echo site_url('administrator/logout'); ?>">Logout</a>
         </div>

      </div>
   </div>

   <?php $this->load->view('template/js'); ?>
</body>
</html>