<!DOCTYPE html>
<html>
<head>
   <title>.: CBT - Quisioner :.</title>
   <?php $this->load->view('template/css'); ?>
</head>
<body>

<div class="container">

<div class="panel panel-default">

   <div class="panel-heading">
      <h3 class="panel-title text-center">Silahkan isi quisioner singkat berikut sebelum meninggalkan ruangan</h3>
   </div>

   <?php echo form_open('quisioner/post'); ?>
   <div class="panel-body">

      <div class="form-group">
         <p>1. Bagaimanakah keramahan dan kepedulian petugas dalam memberikan pelayanan?</p>
         <label class="radio-inline"><input type="radio" name="soal_1" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_1" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_1" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_1" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_1" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>2. Puaskah anda terhadap informasi yang diberikan oleh petugas?</p>
         <label class="radio-inline"><input type="radio" name="soal_2" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_2" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_2" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_2" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_2" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>3. Puaskah anda terhadap jawaban yang diberikan petugas?</p>
         <label class="radio-inline"><input type="radio" name="soal_3" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_3" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_3" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_3" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_3" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>4. Puaskah anda terhadap kualitas pelayanan yang diberikan?</p>
         <label class="radio-inline"><input type="radio" name="soal_4" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_4" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_4" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_4" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_4" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>5. Apakah memahami keinginan/kesulitan anda?</p>
         <label class="radio-inline"><input type="radio" name="soal_5" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_5" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_5" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_5" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_5" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>6. Bagaimanakah penampilan/kerapian petugas dalam memberikan pelayanan?</p>
         <label class="radio-inline"><input type="radio" name="soal_6" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_6" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_6" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_6" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_6" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>7. Puaskah anda dengan fasilitas penunjang & sarana pelayanan di Pusat Pendaftaran Mahasiswa Baru UMP (parkir, ruang tunggu, WC, dll)?</p>
         <label class="radio-inline"><input type="radio" name="soal_7" value="SANGAT_BAIK">Sangat Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_7" value="BAIK">Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_7" value="CUKUP">Cukup</label>
         <label class="radio-inline"><input type="radio" name="soal_7" value="KURANG_BAIK">Kurang Baik</label>
         <label class="radio-inline"><input type="radio" name="soal_7" value="SANGAT_TIDAK_BAIK">Sangat Tidak Baik</label>
      </div>

      <div class="form-group">
         <p>8. Media informasi apa yang sering anda gunakan sehari-hari?</p>
         <label class="radio-inline"><input type="radio" name="soal_8" value="TELEVISI">Televisi</label>
         <label class="radio-inline"><input type="radio" name="soal_8" value="RADIO">Radio</label>
         <label class="radio-inline"><input type="radio" name="soal_8" value="MEDIA_CETAK">Media Cetak (koran, buletin, majalah)</label>
         <label class="radio-inline"><input type="radio" name="soal_8" value="INTERNET">Internet</label>
         <label class="radio-inline"><input id="radio_8" type="radio" name="soal_8" value="LAINNYA">Lainnya&nbsp;<input id="inputan_8" type="text" name="soal_8" disabled></label>
      </div>

      <div class="form-group">
         <p>9. Apakah anda sering melakukan browsing internet dalam keseharian?</p>
         <label class="radio-inline"><input type="radio" name="soal_9" value="YA">Ya</label>
         <label class="radio-inline"><input type="radio" name="soal_9" value="TIDAK">Tidak</label>
      </div>

      <div class="form-group">
         <p>10. Media sosial apa saja yang sering anda gunakan?</p>
         <label class="radio-inline"><input type="radio" name="soal_10" value="FACEBOOK">Facebook</label>
         <label class="radio-inline"><input type="radio" name="soal_10" value="TWITTER">Twitter</label>
         <label class="radio-inline"><input type="radio" name="soal_10" value="INSTAGRAM">Instagram</label>
         <label class="radio-inline"><input type="radio" name="soal_10" value="YOUTUBE">Youtube</label>
         <label class="radio-inline"><input id="radio_10" type="radio" name="soal_10" value="LAINNYA">Lainnya&nbsp;<input id="inputan_10" type="text" name="soal_10" disabled></label>
      </div>

      <div class="form-group">
         <p>11. Aplikasi media komunikasi apa saja yang anda gunakan?</p>
         <label class="radio-inline"><input type="radio" name="soal_11" value="WHATSAPP">Whatsapp</label>
         <label class="radio-inline"><input type="radio" name="soal_11" value="BBM">BBM</label>
         <label class="radio-inline"><input type="radio" name="soal_11" value="LINE">LINE</label>
         <label class="radio-inline"><input type="radio" name="soal_11" value="LINKEDIN">LinkedIn</label>
         <label class="radio-inline"><input id="radio_11" type="radio" name="soal_11" value="LAINNYA">Lainnya&nbsp;<input id="inputan_11" type="text" name="soal_11" disabled></label>
      </div>

      <div class="form-group">
         <p>12. Dari manakah anda mendapatkan info tentang Pendaftaran Mahasiswa Baru UMP?</p>
         <label class="radio-inline"><input type="radio" name="soal_12" value="SPANDUK">Spanduk</label>
         <label class="radio-inline"><input type="radio" name="soal_12" value="BROSUR/LEAFLET">Brosur/Leaflet</label>
         <label class="radio-inline"><input type="radio" name="soal_12" value="STAND_PROMOSI">Stand Promosi UMP</label>
         <label class="radio-inline"><input type="radio" name="soal_12" value="MEDIA_CETAK">Media Cetak (Majalah/Koran)</label>
         <label class="radio-inline"><input type="radio" name="soal_12" value="RADIO">Radio</label><br>
         <label class="radio-inline"><input type="radio" name="soal_12" value="MEDIA_SOSIAL">Media Sosial</label>
         <label class="radio-inline"><input id="radio_12A" type="radio" name="soal_12" value="MEDIA_SOSIAL_LAINNYA">Media Sosial Lainnya&nbsp;<input id="inputan_12A" type="text" name="soal_12" disabled></label>
         <label class="radio-inline"><input id="radio_12B" type="radio" name="soal_12" value="LAINNYA">Lainnya&nbsp;<input id="inputan_12B" class="form-control" type="text" name="soal_12" disabled></label>
      </div>

      <div class="form-group">
         <p>13. Stasion radio apa saja yang sering anda dengarkan?</p>
         <label class="radio-inline"><input id="inputan_13" class="form-control" type="text" name="soal_13"></label>
      </div>

      <div class="form-group">
         <p>14. Jika anda mendengarkan radio, kapan waktu yang sering anda gunakan?</p>
         <label class="radio-inline"><input type="radio" name="soal_14" value="PAGI">Pagi</label>
         <label class="radio-inline"><input type="radio" name="soal_14" value="SIANG">Siang</label>
         <label class="radio-inline"><input type="radio" name="soal_14" value="MALAM">Malam</label>
         <label class="radio-inline"><input id="radio_14" type="radio" name="soal_14" value="LAINNYA">Lainnya&nbsp;<input id="inputan_14" type="text" name="soal_14" disabled></label>
      </div>

      <div class="form-group">
         <p>15. Media cetak apa saja yang anda baca? Sebutkan (boleh menyebut nama media) massa?</p>
         <label class="radio-inline"><input id="inputan_15" class="form-control" type="text" name="soal_15"></label>
      </div>

      <div class="form-group">
         <p>16. Apakah anda mendapatkan kemudahan dalam mencari informasi tentang UMP?</p>
         <label class="radio-inline"><input type="radio" name="soal_16" value="YA">Ya</label>
         <label class="radio-inline"><input type="radio" name="soal_16" value="TIDAK">Siang</label>
      </div>

      <div class="form-group">
         <p>17. Bagaimana anda mencari informasi pendaftaran mahasiswa baru UMP?</p>
         <label class="radio-inline"><input type="radio" name="soal_17" value="BROWSING_INTERNET">Browsing Internet</label>
         <label class="radio-inline"><input type="radio" name="soal_17" value="MEDIA_SOSIAL">Media Sosial</label>
         <label class="radio-inline"><input type="radio" name="soal_17" value="MEDIA_CETAK">Media Cetak</label>
         <label class="radio-inline"><input type="radio" name="soal_17" value="SAUDARA/TEMAN/ORANG_LAIN">Saudara/teman/orang lain</label>
         <label class="radio-inline"><input type="radio" name="soal_17" value="DATANG_LANGSUNG">Datang Langsung</label>
         <label class="radio-inline"><input id="radio_17" type="radio" name="soal_17" value="LAINNYA">Lainnya&nbsp;<input id="inputan_17" type="text" name="soal_17" disabled></label>
      </div>

      <div class="form-group">
         <p>18. Apakah informasi yang anda dapatkan tentang pendaftaran mahasiswa baru cukup jelas?</p>
         <label class="radio-inline"><input type="radio" name="soal_18" value="YA">Ya</label>
         <label class="radio-inline"><input type="radio" name="soal_18" value="TIDAK">Tidak</label>
      </div>

      <div class="form-group">
         <p>19. Apakah UMP menjadi pilihan pertama dalam memilih universitas yang anda inginkan?</p>
         <label class="radio-inline"><input type="radio" name="soal_19" value="YA">Ya</label>
         <label class="radio-inline"><input type="radio" name="soal_19" value="TIDAK">Tidak</label>
      </div>

      <div class="form-group">
         <p>20. Jika jawaban anda <strong>Tidak</strong>, menjadi urutan keberapakah UMP dalam pertimbangan anda memilih universitas?</p>
         <label class="radio-inline"><input type="radio" name="soal_20" value="PILIHAN2">Pilihan ke 2</label>
         <label class="radio-inline"><input type="radio" name="soal_20" value="PILIHAN3">Pilihan ke 3</label>
         <label class="radio-inline"><input id="radio_20" type="radio" name="soal_20" value="LAINNYA">Lainnya&nbsp;<input id="inputan_20" type="text" name="soal_20" disabled></label>
      </div>

      <div class="form-group">
         <p>21. Apakah anda merekomendasikan UMP kepada orang lain?</p>
         <label class="radio-inline"><input type="radio" name="soal_21" value="YA">Ya</label>
         <label class="radio-inline"><input type="radio" name="soal_21" value="TIDAK">Tidak</label>
      </div>

      <div class="form-group">
         <p>22. Kritik dan Saran</p>
         <label class="radio-inline"><textarea id="inputan_22" class="form-control" type="text" name="soal_22"></textarea></label>
      </div>

   </div> <!-- Panel body -->

   <div class="panel-footer text-right">
      <input type="submit" class="btn btn-default" value="Simpan">
   </div>
   <?php echo form_close(); ?>

</div> <!--  Panel -->

</div> <!-- Container -->

<?php $this->load->view('template/js'); ?>
<script type="text/javascript">
   $(document).ready(
      function () {
         
         // onchange event soal 8
         $('input:radio[name="soal_8"]'). on('change', function() {
            if ($('#radio_8').is(':checked')) {
               $('#inputan_8').removeAttr('disabled');
            } else {
               $('#inputan_8').attr('disabled', true);
            }
         });

         // onchange event soal 10
         $('input:radio[name="soal_10"]'). on('change', function() {
            if ($('#radio_10').is(':checked')) {
               $('#inputan_10').removeAttr('disabled');
            } else {
               $('#inputan_10').attr('disabled', true);
            }
         });

         // onchange event soal 11
         $('input:radio[name="soal_11"]'). on('change', function() {
            if ($('#radio_11').is(':checked')) {
               $('#inputan_11').removeAttr('disabled');
            } else {
               $('#inputan_11').attr('disabled', true);
            }
         });

         // onchange event soal 12
         $('input:radio[name="soal_12"]'). on('change', function() {
            if ($('#radio_12A').is(':checked')) {
               $('#inputan_12A').removeAttr('disabled');
            } else {
               $('#inputan_12A').attr('disabled', true);
            }

            if ($('#radio_12B').is(':checked')) {
               $('#inputan_12B').removeAttr('disabled');
            } else {
               $('#inputan_12B').attr('disabled', true);
            }
         });

         // onchange event soal 14
         $('input:radio[name="soal_14"]'). on('change', function() {
            if ($('#radio_14').is(':checked')) {
               $('#inputan_14').removeAttr('disabled');
            } else {
               $('#inputan_14').attr('disabled', true);
            }
         });

         // onchange event soal 17
         $('input:radio[name="soal_17"]'). on('change', function() {
            if ($('#radio_17').is(':checked')) {
               $('#inputan_17').removeAttr('disabled');
            } else {
               $('#inputan_17').attr('disabled', true);
            }
         });

         // onchange event soal 20
         $('input:radio[name="soal_20"]'). on('change', function() {
            if ($('#radio_20').is(':checked')) {
               $('#inputan_20').removeAttr('disabled');
            } else {
               $('#inputan_20').attr('disabled', true);
            }
         });
      }
   );

</script>
</body>
</html>