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

	<?php if ($this->session->flashdata('inactived')): ?>
	<div class="alert alert-info alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <strong>Ujian belum dibuka, Silahkan menghubungi petugas untuk memulai ujian</strong>
     </div>
	<?php endif ?>   
	<div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><strong>Detail Pendaftar</strong></h3>
      </div>
		<div class="panel-body">
			<table class="table">
            <tbody>
               <tr>
                  <td width="10%" class="text-left">Tgl Pendaftaran:</td>
                  <td width="30%" class="text-left"><strong><?php echo date('j F Y', strtotime($principal->tgl)); ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">ID Pendaftaran:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->id; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Nama:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->nama; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Tempat, Tanggal lahir:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->tmplhr; ?>, <?php echo $principal->tgllhr; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Jenis Kelamin:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->sex == 1 ? 'Laki-laki' : 'Perempuan';?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Alamat:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->alamat; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Tipe Soal:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->jenispendf == 1 ? 'IPA' : 'IPS'; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Pilihan 1:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->pil1->nama; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Pilihan 2:</td>
                  <td width="30%" class="text-left"><strong><?php echo $principal->pil2 == NULL ? '-' : $principal->pil2->nama; ?></strong></td>
               </tr>
               <tr>
                  <td width="10%" class="text-left">Gelombang Pendaftaran:</td>
                  <td width="30%" class="text-left"><strong>Gelombang <?php echo $principal->gel; ?></strong></td>
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
