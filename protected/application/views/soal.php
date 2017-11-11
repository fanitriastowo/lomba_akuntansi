<!DOCTYPE html>
<html>
<head>
   <title>Welcome to CBT</title>

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <?php $this->load->view('template/css'); ?>
   <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.vertical-tabs.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo site_url('assets/css/soal.css'); ?>">
   <link rel="stylesheet" href="<?php echo site_url('assets/css/animate.css'); ?>">
</head>
<body>

<div class="container">

   <div class="panel panel-default">

      <div class="panel-body">

         <div class="col-md-6">
            <h3>ID Peserta : <strong><?php echo $user->username; ?></strong></h3>
         </div>
         <div class="col-md-6">
            <h2 class="text-right"><span id="server_time"></span></h2>
         </div>

         <div class="col-sm-1">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left" id="soal_tab">
               <?php foreach ($list_soal as $key => $soal): ?>
                  <li>
                     <a class="soal_tab_<?php echo $soal->id; ?>"
                        href="#tab_<?php echo $soal->id; ?>"
                        data-toggle="tab">
                        <?php echo $key + 1; ?>
                     </a>
                  </li>
               <?php endforeach ?>
            </ul>
         </div>

         <div class="col-sm-11">
            <!-- Tab panes -->
            <div class="tab-content">
               <?php foreach ($list_soal as $key => $soal): ?>

                  <?php
                  // Check backend if jawaban dari user sudah ada
                  $jawaban_user = TRUE;
                  if (isset($soal->jawaban_user)) {
                     $jawaban_user = $soal->jawaban_user;
                  } else {
                     $jawaban_user = FALSE;
                  }
                  ?>

                  <div class="tab-pane" id="tab_<?php echo $soal->id; ?>">

                     <p><strong>Soal No. <?php echo $key + 1; ?>.</strong></p>

                     <?php if ($soal->pilihan_a === "" || $soal->pilihan_a == NULL): // Jika soal berupa gambar ?>
                        <img class="img-responsive img-rounded"
                             src="<?php echo site_url('assets/images/' . $soal->soal); ?>"><br>

                     <?php else: // Jika soal berupa text ?>

                        <?php if ($soal->tambahan == NULL): // jika tidak ada soal tambahan ?>
                           <p><?php echo $soal->soal; ?></p>

                        <?php else: // Jika terdapat soal tambahan ?>
                           <p><?php echo $soal->soal_tambahan; ?></p>
                           <p><?php echo $soal->soal; ?></p>
                        <?php endif ?>

                     <?php endif ?>

                     <p><strong>Jawaban Anda?</strong></p>
                     <div class="btn-group-vertical" data-toggle="buttons">
                        <ol>
                           <li class="hide_li_bullet">
                              <table>
                                 <tr>
                                    <td style="vertical-align: text-top;">
                                       <label class="btn btn-default btn-md <?php echo $jawaban_user === 'A' ? 'active' : ''; ?>">
                                          <input
                                                  class="hide_radio_circle pilihan <?php echo $soal->id; ?>"
                                                  type="radio"
                                                  name="jawaban<?php echo $soal->id; ?>"
                                                  value="A"
                                              <?php echo $jawaban_user === 'A' ? 'checked' : ''; ?>
                                          >&nbsp;A
                                       </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td class="text-justify"><label><?php echo $soal->pilihan_a; ?></label></td>
                                 </tr>
                              </table>
                           </li>

                           <li class="hide_li_bullet">
                              <table>
                                 <tr>
                                    <td style="vertical-align: text-top;">
                                       <label class="btn btn-default btn-md <?php echo $jawaban_user === 'B' ? 'active' : ''; ?>">
                                          <input
                                                  class="hide_radio_circle pilihan <?php echo $soal->id; ?>"
                                                  type="radio"
                                                  name="jawaban<?php echo $soal->id; ?>"
                                                  value="B"
                                              <?php echo $jawaban_user === 'B' ? 'checked' : ''; ?>
                                          >&nbsp;B
                                       </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td class="text-justify"><label><?php echo $soal->pilihan_b; ?></label></td>
                                 </tr>
                              </table>
                           </li>

                           <li class="hide_li_bullet">
                              <table>
                                 <tr>
                                    <td style="vertical-align: text-top;">
                                       <label class="btn btn-default btn-md <?php echo $jawaban_user === 'C' ? 'active' : ''; ?>">
                                          <input
                                                  class="hide_radio_circle pilihan <?php echo $soal->id; ?>"
                                                  type="radio"
                                                  name="jawaban<?php echo $soal->id; ?>"
                                                  value="C"
                                              <?php echo $jawaban_user === 'C' ? 'checked' : ''; ?>
                                          >&nbsp;C
                                       </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td class="text-justify"><label><?php echo $soal->pilihan_c; ?></label></td>
                                 </tr>
                              </table>
                           </li>

                           <li class="hide_li_bullet">
                              <table>
                                 <tr>
                                    <td style="vertical-align: text-top;">
                                       <label class="btn btn-default btn-md <?php echo $jawaban_user === 'D' ? 'active' : ''; ?>">
                                          <input
                                                  class="hide_radio_circle pilihan <?php echo $soal->id; ?>"
                                                  type="radio"
                                                  name="jawaban<?php echo $soal->id; ?>"
                                                  value="D"
                                              <?php echo $jawaban_user === 'D' ? 'checked' : ''; ?>
                                          >&nbsp;D
                                       </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td class="text-justify"><label><?php echo $soal->pilihan_d; ?></label></td>
                                 </tr>
                              </table>
                           </li>

                           <li class="hide_li_bullet">
                              <table>
                                 <tr>
                                    <td style="vertical-align: text-top;">
                                       <label class="btn btn-default btn-md <?php echo $jawaban_user === 'E' ? 'active' : ''; ?>">
                                          <input
                                                  class="hide_radio_circle pilihan <?php echo $soal->id; ?>"
                                                  type="radio"
                                                  name="jawaban<?php echo $soal->id; ?>"
                                                  value="E"
                                              <?php echo $jawaban_user === 'E' ? 'checked' : ''; ?>
                                          >&nbsp;E
                                       </label>&nbsp;
                                    </td>
                                    <td>&nbsp;</td>
                                    <td class="text-justify"><label><?php echo $soal->pilihan_e; ?></label></td>
                                 </tr>
                              </table>
                           </li>
                        </ol>
                     </div>

                     <hr>
                     <div class="text-center">
                        <div class="btn-group">

                           <?php // checking first tab ?>
                           <?php if ($key === 0): ?>
                              <a href="#tab_<?php echo $list_soal[$key + 1]->id; ?>"
                                 class="btn btn-primary btn-md btn-paging downClick">Selanjutnya</a>
                           <?php endif ?>

                           <?php // Checking for 2 until last index -1 ?>
                           <?php if ($key > 0 && $key + 1 < count($list_soal)): ?>
                              <a href="#tab_<?php echo $list_soal[$key - 1]->id; ?>"
                                 class="btn btn-primary btn-md btn-paging upClick">Sebelumnya</a>
                              <a href="#tab_<?php echo $list_soal[$key + 1]->id; ?>"
                                 class="btn btn-primary btn-md btn-paging downClick">Selanjutnya</a>
                           <?php endif ?>

                           <?php // Checking for last tab ?>
                           <?php if ($key + 1 === count($list_soal)): ?>
                              <a href="#tab_<?php echo $list_soal[$key - 1]->id; ?>"
                                 class="btn btn-primary btn-md btn-paging upClick">Sebelumnya</a>
                           <?php endif ?>

                        </div>

                        <div class="btn-group">
                           <a href="#" class="btn btn-success btn-md btn_simpan"
                              disabled style="display: none;">Simpan</a>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>

         <!-- ajax loading image -->
         <div class="text-center">
            <!-- Loading gif -->
            <img id="loading" src="<?php echo site_url('assets/images/loading.gif'); ?>" style="display: none;">
         </div>

      </div> <!-- Panel body -->
   </div> <!--  Panel -->


</div> <!-- Container -->

<!-- MODAL -->
<!-- Modal Remove -->
<div class="modal fade"
     id="modalSimpan" tabindex="-1" role="dialog" aria-labelledby="modalSimpanLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
               <span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Selesai ujian</h4>
         </div>
         <div class="modal-body">
            <strong>Apakah Anda yakin akan selesai?</strong>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success btnSimpanModal">
               <span class="glyphicon glyphicon-ok-circle"></span> Ya
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
               <span class="glyphicon glyphicon-remove-circle"></span> Tidak
            </button>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('template/js'); ?>
<script src="<?php echo site_url('assets/js/jquery.countdown.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/bootstrap-notify.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/soal.js'); ?>"></script>
<script type="text/javascript">
   $(document).ready(function () {

      var scrolled = 0;
      $(".downClick").on("click", function () {
         scrolled = scrolled + 40;

         $("#soal_tab").animate({
            scrollTop: scrolled
         });

      });


      $(".upClick").on("click", function () {
         scrolled = scrolled - 40;

         $("#soal_tab").animate({
            scrollTop: scrolled
         });

      });


      // active first tab for the first time
      $('#soal_tab a:first').tab('show');

      // start countdown
      countdown_timer(
          '<?php echo $finish_time; ?>',
          "<?php echo site_url('soal/selesai'); ?>",
          "<?php echo site_url('soal/update_waktu_selesai'); ?>"
      );

      // ubah background nomor halaman jika jawaban sudah terpilih
      ubah_nomor_soal();

      // next prev button event
      next_prev_button();

      // submit jawaban on radio change event
      submit_jawaban(
          '<?php echo base_url('soal/save_ajax'); ?>',
          <?php echo count($list_soal); ?>,
          <?php echo $user->id; ?>
      );

      // tampilkan tombol simpan jika jumlah nomor soal 
      // yang punya bg-success sama dengan total soal (Refersh page)
      tampilkan_tombol_simpan(<?php echo count($list_soal); ?>);

      // tampilkan notifikasi sebelum selesai
      $('.btn_simpan').click(function (e) {
         e.preventDefault();
         $('#modalSimpan').modal();
      });

      // button simpan
      $('.btnSimpanModal').click(function (e) {
         e.preventDefault();
         localStorage.removeItem("jumlahSoal");
         document.location = "<?php echo site_url('soal/selesai'); ?>";
      });

   });

</script>

</body>
</html>