<!DOCTYPE html>
<html>
<head>
   <title>Welcome to CBT</title>
   <?php $this->load->view('template/css'); ?>
</head>
<body>

   <div class="container">
      <div class="panel panel-default">
      	<div class="panel-body">
			<h1 class="text-center">Selesai Ujian</h1>
			<h1 class="text-center">
				Terima kasih telah menyelesaikan Test dengan baik. 
				Silahkan menghubungi Petugas Entry Data untuk mengetahui hasil test.
			</h1>
      	</div>
      	<div class="panel-footer">
			<a class="btn btn-primary btn-md btn-block" href="<?php echo site_url('login'); ?>">Login</a>
      	</div>

      </div>
   </div>

   <?php $this->load->view('template/js'); ?>
   <script type="text/javascript">
      $(document).ready(
         function() {
            if (window.history && window.history.pushState) {

               $(window).on('popstate', function() {
                  var hashLocation = location.hash;
                  var hashSplit = hashLocation.split("#!/");
                  var hashName = hashSplit[1];

                  if (hashName !== '') {
                     var hash = window.location.hash;
                     if (hash === '') {
                        alert('Anda tidak dapat mengulang CBT. Jawaban telah tersimpan dan akan segera diproses');
                        window.location="<?php echo site_url('soal/selesai'); ?>";
                        return false;
                     }
                  }
               });

               window.history.pushState('forward', null, './#');
            }
         }
      );
   </script>
</body>
</html>