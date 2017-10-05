/**
 * simpan jawaban ajax post
 * @param  {String} url    
 * @param  {object} object
 */
function post_jawaban(url, object, user_id) {
   var id = object.attr("class");
   var id_trimmed = id.replace(/ /g,'');

   var temp_jawaban = object.attr("value");

   post_array = 
   {
      "soal_id" : id_trimmed.substring(24),
      "jawaban" : temp_jawaban,  
      "user_id" : user_id  
   }
   
   var url = url;
   var data = post_array;
   var success = function(data, status){
      $("#loading").hide();

      // show notify if succuss
      $.notify(
         {
            // options
            message : "Jawaban Tersimpan"
         },
         {
            // settings
            type: "info",
            newest_on_top: true,
            placement: {
               from: "top",
               align: "center"
            },
            delay: 1000,
            timer: 200,
            animate: {
               enter: 'animated bounceIn',
               exit: 'animated bounceOut'
            }
         }
      );
   };
   
   var error = function (request, status, error) {
      $("#loading").hide();
      console.log("request " + error + "\nstatus " + status + "\nerror " + error);

      // show notify if error
      $.notify(
         {
            // options
            message : "Jawaban Belum Tersimpan"
         },
         {
            // settings
            type: "danger",
            newest_on_top: true,
            placement: {
               from: "top",
               align: "center"
            },
            delay: 2000,
            timer: 1000,
            animate: {
               enter: 'animated bounceIn',
               exit: 'animated bounceOut'
            }
         }
      );
   }

   // invoke animation and show it
   $("#loading").show();
   $.ajax({
      url : url,
      type : "POST",
      data : data,
      success : success,
      error : error
   });
}

/**
 * Menghitung waktu mundur test
 * @param  {String} url finish_time      
 * @param  {String} url redirect_location.
 * @param  {String} url update waktu tiap 5 menit
 */
function countdown_timer(finish_time, redirect_location, update_waktu_selesai) {
   $('#server_time')
      .countdown(
         // MM/DD/YYYY hh:mm:ss
         finish_time,
         function(event) {
            $(this).html(event.strftime(''
               + '<span>%H</span> : '
               + '<span>%M</span> : '
               + '<span>%S</span>'))
         }
      )
      .on('update.countdown', function(event) {
            if (event.strftime('%H') == 0 && event.strftime('%M') < 10) {
               $( "#server_time" ).addClass('text-danger');     
            }

            if (event.strftime('%M') % 5 == 0 && event.strftime('%S') == 0) {
               $.get(update_waktu_selesai);
            }
         }
      )
      .on('finish.countdown', function() {
            localStorage.removeItem("jumlahSoal");
            document.location = redirect_location;
         }
      );
}

/**
 * Tampilkan tombol simpan setelah semua soal terjawab
 * @param  {int} jumlahSoal 
 */
function tampilkan_tombol_simpan(jumlahSoal) {
   if ($('.bg-success').length >= jumlahSoal) {
      $('.btn_simpan').removeAttr('disabled');
      $('.btn_simpan').show();
   }
}

/**
 * rubah warna nomor soal 
 * jika jawaban sudah terjawab semua
 */
function ubah_nomor_soal() {
   $(".pilihan").each(
      function() {
         var name = $(this).attr("name");
         if ($("input:radio[name=" + name + "]:checked").length > 0) {
            var soal_tab = $(this).attr("class");
            var soal_tab_trimmed = soal_tab.replace(/ /g,'');
            $('.soal_tab_' + soal_tab_trimmed.substring(24)).removeClass('bg-danger').addClass('bg-success');
            
         } else {
            var soal_tab = $(this).attr("class");
            var soal_tab_trimmed = soal_tab.replace(/ /g,'');
            $('.soal_tab_' + soal_tab_trimmed.substring(24)).removeClass('bg-success').addClass('bg-danger');
         }
      }
   );
}

/**
 * next dan prev tombol
 * untuk melanjutkan atau kembali ke soal sebelumnya 
 */
function next_prev_button() {
   $('.btn-paging').click(function(e) {
      e.preventDefault();
      $('.nav-tabs a[href="' + $(this).attr("href") + '"]').tab('show');
   });
}

/**
 * event untuk radio button pililhan jawaban
 * @param  {String} url    
 * @param  {Int} jumlahSoal
 */
function submit_jawaban(url, jumlahSoal, user_id) {
   $('.pilihan').change(
      function() {
         if ($(this).is(':checked')) {
            var soal_tab = $(this).attr("class");
            var soal_tab_trimmed = soal_tab.replace(/ /g,'');
            $('.soal_tab_' + soal_tab_trimmed.substring(24)).removeClass('bg-danger').addClass('bg-success');
            post_jawaban(url, $(this), user_id);

            // tampilkan tombol simpan jika jumlah nomor 
            // soal yang punya bg-success sama dengan total soal
            tampilkan_tombol_simpan(jumlahSoal);
         } 
      }
   );
}