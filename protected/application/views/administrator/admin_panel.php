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
         <table class="table table-condensed table-bordered table-striped table-hover">
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
            <?php $no = 1; ?>
            <?php $status = ""; ?>
            <?php foreach ($users as $user) : ?>

               <?php
               switch ($user->sudah_transfer) {
                  case 0 :
                     $status = "warning";
                     break;
                  case 1 :
                     $status = "success";
                     break;
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

                     <a href="#" class="btn btn-xs btn-primary disabled" title="Detail Peserta" disabled="true">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                  </td>
               </tr>
               <?php $no++; ?>
            <?php endforeach; ?>
         </table>
         <strong>Ket:</strong> <br>
         <code>
            Sudah Transfer <label class="label label-success">status</label>
            Belum Transfer <label class="label label-warning">status</label>
         </code>
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

<?php $this->load->view('template/js'); ?>

<script type="text/javascript">
   $(document).ready(function () {

      $('.konfirm_ujian')
          .hide()  // Hide it initially
          .ajaxStart(function() {
             $(this).show();
          })
          .ajaxStop(function() {
             $(this).hide();
          })
      ;

      $('.konfirm_ujian').click(function (e) {
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
   });
</script>
</body>
</html>