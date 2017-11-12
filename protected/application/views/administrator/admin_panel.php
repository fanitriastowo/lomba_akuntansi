<!DOCTYPE html>
<html>
<head>
   <title>Admin Panel</title>
   <?php $this->load->view('template/css'); ?>
   <link rel="stylesheet" href="<?php echo site_url('assets/datatable/datatables.min.css'); ?>">
</head>
<body>

<div class="container">
   <div class="panel panel-default">
      <div class="panel-body">
         <h1 class="text-center">Daftar Peserta</h1>


         <table id="peserta_table" class="table table-condensed table-bordered table-striped table-hover">
            <thead>
            <tr>
               <th width="4%">No</th>
               <th>Registrasi</th>
               <th>ID</th>
               <th>Nama</th>
               <th>J_K</th>
               <th>Asal Sekolah</th>
               <th>No Telp</th>
               <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $no = 1; ?>
            <?php $status = ""; ?>
            <?php $status_belum_transfer = 0; ?>
            <?php $status_sudah_transfer = 0; ?>
            <?php $status_sudah_diapprove = 0; ?>
            <?php $status_sudah_ujian = 0; ?>
            <?php foreach ($users as $user) : ?>

               <?php
               if ($user->sudah_transfer == 0) { // if user isn't transfer
                  $status = "danger";
                  $status_belum_transfer++;

               } else { // if user is transfered
                  $status = "warning";
                  $status_sudah_transfer++;

                  if ($user->belum_ujian == 1) { // if user sudah di-approve
                     $status = "success";
                     $status_sudah_diapprove++;
                     $status_sudah_transfer--;

                     if ($user->sudah_ujian == 1) { // if user sudah ujian
                        $status = "info";
                        $status_sudah_ujian++;
                        $status_sudah_diapprove--;
                     }
                  }
               }
               ?>
               <tr class="<?php echo $status; ?>">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $user->tanggal_daftar; ?></td>
                  <td><?php echo $user->username; ?></td>
                  <td><?php echo $user->nama; ?></td>
                  <td><?php echo $user->jenis_kelamin; ?></td>
                  <td><?php echo $user->asal_sekolah; ?></td>
                  <td><?php echo $user->phone; ?></td>
                  <td>
                     <a href="<?php echo site_url("administrator/get_user_transfer_image/" . $user->id); ?>"
                        class="btn btn-xs btn-success konfirm_ujian" title="Konfirmasi Ujian">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>

                     <a href="<?php echo site_url("administrator/get_user_detail/" . $user->id); ?>"
                        class="btn btn-xs btn-primary get_detail" title="Detail Peserta">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                  </td>
               </tr>

               <?php $no++; ?>
            <?php endforeach; ?>

            </tbody>

         </table>
         <strong>Ket:</strong> <br>
         <label class="label label-danger">status</label> <code>Belum Transfer</code> -> <label
                 class="label label-default"><?php echo $status_belum_transfer; ?></label><br>
         <label class="label label-warning">status</label> <code>Sudah Transfer</code> -> <label
                 class="label label-default"><?php echo $status_sudah_transfer; ?></label><br>
         <label class="label label-success">status</label> <code>Sudah di-Approve</code> -> <label
                 class="label label-default"><?php echo $status_sudah_diapprove; ?></label><br>
         <label class="label label-info">status</label> <code>Sudah Ujian</code> -> <label
                 class="label label-default"><?php echo $status_sudah_ujian; ?></label> <br>
      </div>
      <div class="panel-footer">
         <a class="btn btn-primary btn-md btn-block" href="<?php echo site_url('administrator/logout'); ?>">Logout</a>
      </div>

   </div>
</div>


<!-- ==================================MODAL WINDOW==================================== -->
<!-- Modal Import -->
<?php echo form_open('administrator/approve_test', array('class' => 'form-horizontal')); ?>
<?php echo form_hidden('user_id', '') ?>
<div class="modal fade" id="modal_approval" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Bukti Transfer</h4>
         </div>
         <div class="modal-body text-center">

            <div id="loading_animation" class="text-center">
               <img src="<?php echo site_url("/assets/images/ajax-loader.gif"); ?>"
                    alt="loading...">
            </div>

            <img src="" id="image_name" class="img-thumbnail" width="350px">
            <br>
            <br>
            <label class="radio-inline">
               <input type="radio" name="belum_ujian" value="1"> Approve
            </label>
            <label class="radio-inline">
               <input type="radio" name="belum_ujian" value="0"> Disapprove
            </label>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Simpan"/>
         </div>
      </div>
   </div>
</div>
<?php echo form_close(); ?>

<!-- ==================================MODAL WINDOW==================================== -->
<!-- Modal Import -->
<form class="form-horizontal">
   <div class="modal fade" id="modal_get_user_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">Detail User</h4>
            </div>
            <div class="modal-body text-center">

               <div class="form-group">
                  <label for="tanggal_daftar" class="col-sm-2 control-label">Tanggal Daftar</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="tanggal_daftar" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="ID" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="ID" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="nama" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="phone" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="tempat_lahir" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="tanggal_lahir" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="alamat" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="asal_sekolah" class="col-sm-2 control-label">Asal Sekolah</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="asal_sekolah" disabled>
                  </div>
               </div>
               <div class="form-group">
                  <label for="photo" class="col-sm-2 control-label">Photo</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="photo" disabled>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</form>

<?php $this->load->view('template/js'); ?>
<script src="<?php echo site_url('assets/datatable/datatables.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery-dateFormat.min.js'); ?>"></script>

<script type="text/javascript">
   $(document).ready(function () {

      // jquery datatable
      $('#peserta_table').DataTable();

      // bootstrap modal and datatable integration for get user detail
      $('#peserta_table').on('click', '.get_detail', function (e) {
         e.preventDefault();
         $.getJSON($(this).attr("href"), function (data) {
            $('#tanggal_daftar').val(data.tanggal_daftar);
            $('#ID').val(data.username);
            $('#nama').val(data.nama);
            $('#phone').val(data.phone);
            $('#tempat_lahir').val(data.tempat_lahir);
            $('#tanggal_lahir').val(data.tanggal_lahir);
            $('#alamat').val(data.jalan);
            $('#asal_sekolah').val(data.asal_sekolah);
            $('#photo').val('PHOTO');
         });
         $('#modal_get_user_detail').modal();
      });

      // bootstrap modal and datatable integration for get user image
      $('#peserta_table').on('click', '.konfirm_ujian', function (e) {
         e.preventDefault();
         $.getJSON($(this).attr("href"), function (data) {
            $('input[name="user_id"]').val(data.id);
            $('#image_name').attr(
                "src",
                "<?php echo site_url('uploads/bukti_transfer/'); ?>/" + data.bukti_transfer
            );
         });
         $('#modal_approval').modal();
      });

      // loading effect for fetching the image
      let $loading = $('#loading_animation').hide();
      let $real_image = $('#image_name').hide();
      $(document)
          .ajaxStart(function () {
             $loading.show();
             $real_image.hide();
          })
          .ajaxStop(function () {
             $loading.hide();
             $real_image.show();
          });


   });
</script>
</body>
</html>