<!doctype html>
<html lang="en">
<head>
   <?php $this->load->view('template/css'); ?>
   <title>Document</title>
</head>
<body>

<div class="container">


   <!-- Error import Notification -->
   <?php if (!empty($this->session->flashdata('succes_registration'))): ?>
      <div class="alert alert-success" role="alert">
         <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
         </button>
         <?php echo $this->session->flashdata('succes_registration'); ?>
      </div>
   <?php endif ?>

   <table style="border: hidden">
      <tr>
         <td>Logo</td>
         <td>
            <p style="text-align: center">FAKULTAS EKONOMI DAN BISNIS</p>
            <p style="text-align: center">UNIVERSITAS MUHAMMADIYAH PURWOKERTO</p>
            <p style="text-align: center">Jln. Raya Dukuhwaluh Po Box 202 Kembaran Banyumas (0281) 636751</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>Terima Kasih telah melakukan registrasi</p>
         </td>
      </tr>
      <tr>
         <td>
            <p>Silahkan simpan dan cetak bukti registrasi</p>
         </td>
      </tr>
   </table>

   <hr>

   <table style="border: hidden">
      <tr>
         <td>ID</td>
         <td>:</td>
         <td>{ID}</td>
      </tr>
      <tr>
         <td>Nama</td>
         <td>:</td>
         <td>{nama}</td>
      </tr>
      <tr>
         <td>Asal Sekolah</td>
         <td>:</td>
         <td>{asal_sekolah}</td>
      </tr>
   </table>
   <p>silahkan transfer biaya pendaftaran sebesar Rp. 50.000,- ke rekening berikut:</p>
   <code>
      BRI KK UMP Purwokerto
      a.n. Nur Isna Inayati
      1792-01-0001116-53-1
   </code>

   <hr>

   <p>Kemudian silahkan upload foto bukti transfer ke lombaakuntansi.ump.ac.id
      dengan cara login menggunakan akun masing masing</p>

   <hr>
   <p>atau menghubungi Sandi : 08-222-1834-636</p>

</div>
<?php $this->load->view('template/js'); ?>
</body>
</html>
