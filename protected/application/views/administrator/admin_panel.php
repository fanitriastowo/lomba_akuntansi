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
               <th width="14%">Action</th>
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
               <td>
                  <a href="#" class="btn btn-xs btn-success">det</a>
                  <a href="#" class="btn btn-xs btn-primary">kon</a>
                  <a href="#" class="btn btn-xs btn-default">set</a>
                  <a href="#" class="btn btn-xs btn-danger">cet</a>
               </td>
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