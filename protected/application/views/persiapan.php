<!DOCTYPE html>
<html>
<head>
   <title>Welcome to CBT</title>

   <?php $this->load->view('template/css'); ?>
   <style type="text/css">
      body {
         padding-top: 50px;
      }
   </style>
</head>
<body>

<div class="container">

   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><strong>Detail Pendaftar</strong></h3>
      </div>
      <div class="panel-body">
         <table class="table">
            <tbody>
            <tr>
               <td width="10%" class="text-left">Tgl Pendaftaran:</td>
               <td width="30%" class="text-left">
                  <strong><?php echo date('j F Y', strtotime($principal->tanggal_daftar)); ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">ID Pendaftaran:</td>
               <td width="30%" class="text-left"><strong><?php echo $principal->username; ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">Nama:</td>
               <td width="30%" class="text-left"><strong><?php echo $principal->nama; ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">Asal Sekolah:</td>
               <td width="30%" class="text-left"><strong><?php echo $principal->asal_sekolah; ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">Tempat, Tanggal lahir:</td>
               <td width="30%" class="text-left"><strong><?php echo $principal->tempat_lahir; ?>
                     , <?php echo $principal->tanggal_lahir; ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">Jenis Kelamin:</td>
               <td width="30%" class="text-left">
                  <strong><?php echo $principal->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'; ?></strong></td>
            </tr>
            <tr>
               <td width="10%" class="text-left">Alamat:</td>
               <td width="30%" class="text-left"><strong>
                     Jalan <?php echo $principal->jalan; ?>.No. <?php echo $principal->no_rumah; ?>.<br>
                     RT <?php echo $principal->rt; ?>. RW <?php echo $principal->rw; ?>.<br>
                     Desa <?php echo $principal->desa; ?>. Kecamatan <?php echo $principal->kecamatan; ?>.<br>
                     Kabupaten <?php echo $principal->kabupaten; ?>. Provinsi <?php echo $principal->provinsi; ?>.<br>
                  </strong></td>
            </tr>
            </tbody>
         </table>
      </div>
      <div class="panel-footer">
         <a href="<?php echo site_url('soal'); ?>"
            class="center-block btn btn-primary">
            <strong>Mulai</strong>
         </a>
      </div>
   </div>

</div>

<?php $this->load->view('template/js'); ?>
</body>
</html>
