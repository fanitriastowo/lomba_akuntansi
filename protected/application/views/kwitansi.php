<!doctype html>
<html lang="en">
<head>
   <?php $this->load->view('template/css'); ?>
   <title>Kwitansi Pembayaran Lomba Akuntansi UMP 2017</title>

   <style>
      body {
         background-image: none;
         background-repeat: no-repeat;
         font-family: "Times New Roman", Times, serif !important;
         font-size: 10pt;
      }

      .kop {
         font-size: 12pt;
      }

      .alamat {
         font-size: 7pt;
      }

      .container {
         width: 640px;
      }
   </style>
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

   <table>
      <tr>
         <td width="20%"><img width="70%" src="<?php echo site_url('assets/images/logo.gif') ?>"></td>
         <td width="80%" class="text-center kop">
            <strong>
               <span>FAKULTAS EKONOMI DAN BISNIS</span><br>
               <span>UNIVERSITAS MUHAMMADIYAH PURWOKERTO</span><br>
               <span class="alamat">
                  Kampus 1: Jl. Raya Dukuhwaluh PO. Box 202 Purwokerto 53182
                  Telp. (0281) 636751, 630463 Fax. (0281) 637239 <br>
                  Kampus 2: Jl. Letjen Soepardjo Roestam Km 7 PO. Box 229 Purwokerto
                  Telp. (0281) 6844252, 6844253Fax. (0281) 637239
               </span>
            </strong>
         </td>
      </tr>
   </table>

   <hr>

   <div class="text-center">
      <span>Terima Kasih telah melakukan registrasi</span><br>
      <span>Silahkan simpan dan cetak bukti registrasi</span>
   </div>

   <hr>

   <img class="img-thumbnail" width="100px" src="<?php echo base_url('uploads/users/' . $model->photo); ?>"
        alt="Photo Profile">

   <hr>

   <table>
      <tr>
         <td width="25%">ID</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong><?php echo $model->username; ?></strong></td>
      </tr>
      <tr>
         <td width="25%">Nama</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong><?php echo $model->nama; ?></strong></td>
      </tr>
      <tr>
         <td width="25%">Asal Sekolah</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong><?php echo $model->asal_sekolah; ?></strong></td>
      </tr>
   </table>

   <span>silahkan transfer biaya pendaftaran sebesar <strong>Rp. 50.000,-</strong> ke rekening berikut:</span>
   <br><br>
   <code>
      BRI KK UMP Purwokerto
      a.n. Nur Isna Inayati :
      1792-01-001116-53-1
   </code>

   <hr>

   <span>Kemudian silahkan upload foto bukti transfer ke
      <a target="_blank" href="http://www.lombaakuntansi.ump.ac.id">lombaakuntansi.ump.ac.id</a>
      dengan cara login menggunakan akun masing masing</span>

   <hr>
   <span>atau menghubungi Arifin : 0858-6993-0105</span>

</div>
<?php $this->load->view('template/js'); ?>
</body>
</html>
