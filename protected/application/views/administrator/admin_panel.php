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
               <th width="4%">No</th>
               <th>ID</th>
               <th>Nama</th>
               <th>J_K</th>
               <th>Asal Sekolah</th>
               <th>No Telp</th>
               <th>Action</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($users as $user) : ?>
            <tr>
               <td><?php echo $no; ?></td>
               <td><?php echo $user->username; ?></td>
               <td><?php echo $user->nama; ?></td>
               <td><?php echo $user->jenis_kelamin; ?></td>
               <td><?php echo $user->asal_sekolah; ?></td>
               <td><?php echo $user->phone; ?></td>
               <td>Action</td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
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