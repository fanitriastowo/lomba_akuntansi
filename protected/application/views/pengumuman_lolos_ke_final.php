<?php

define('LOGO', site_url("assets/images/logo.gif"));
define('PHOTO', site_url('uploads/users/' . $model->photo));

tcpdf();
$obj_pdf = new TCPDF
('P', PDF_UNIT, 'A5', true, 'UTF-8', false);

$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Pengumuman";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, 'Selamat Anda lolos ke tahap ke 2');
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
// we can have any view part here like HTML, PHP etc
$content = '

<style>
   body {
      background-image: none;
      background-repeat: no-repeat;
      font-family: "Times New Roman", Times, serif !important;
      font-size: 10pt;
   }

   .kop {
      font-size: 10pt;
   }

   .alamat {
      font-size: 6pt;
   }

   .container {
      width: 1024px;
   }
   
   .text-center {
     text-align: center;
   }
   
   hr {
     height: 0;
     -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
             box-sizing: content-box;
     margin-top: 20px;
     margin-bottom: 20px;
     border: 0;
     border-top: 1px solid #eee;
   }
   
   .img-thumbnail {
     display: inline-block;
     max-width: 100%;
     height: auto;
     padding: 4px;
     line-height: 1.42857143;
     background-color: #fff;
     border: 1px solid #ddd;
     border-radius: 4px;
     -webkit-transition: all .2s ease-in-out;
          -o-transition: all .2s ease-in-out;
             transition: all .2s ease-in-out;
   }
</style>

<div class="container">

   <table>
      <tr>
         <td width="15%"><img width="700%" src="' . LOGO . '"></td>
         <td width="85%" class="text-center kop">
            <strong>
               <span>FAKULTAS EKONOMI DAN BISNIS</span><br>
               <span>UNIVERSITAS MUHAMMADIYAH PURWOKERTO</span><br>
               <span class="alamat">
                  Kampus 1: Jl. Raya Dukuhwaluh PO. Box 202 Purwokerto 53182
                  Telp. (0281) 636751<br>
                  Kampus 2: Jl. Letjen Soepardjo Roestam Km 7 PO. Box 229 Purwokerto
                  Telp. (0281) 6844252
               </span>
            </strong>
         </td>
      </tr>
   </table>
   
   
   <hr>

   <div class="text-center">
      <span>Terima Kasih telah melaksanakan ujian CBT dengan baik</span><br>
      <span>Silahkan perhatikan proses tahap ke 2</span>
   </div>
   
   <br>
   
   <table>
      <tr>
         <td width="25%">ID</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong>' . $model->username . '</strong></td>
      </tr>
      <tr>
         <td width="25%">Nama</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong>' . $model->nama . '</strong></td>
      </tr>
      <tr>
         <td width="25%">Asal Sekolah</td>
         <td width="10%" class="text-center">:</td>
         <td width="65%"><strong>' . $model->asal_sekolah . '</strong></td>
      </tr>
   </table>
   
   <br>
   <br>
   <br>
   
   <strong>Ketentuan:</strong>
   <ol>
      <li>Proses selanjutnya adalah mengikuti proses seleksi tahap ke 2</li>
      <li>Sebelum peserta mengikuti proses seleksi tahap 2, peserta melakukan registrasi ulang dengan cara melakukan pembayaran sebesar Rp. 100.000 melalui transfer ke rekening BRI KK Purwokerto a.n. Nurisna Inayati : 1792-01-001116-53-1 paling lambat 22 November 2017. </li>
      <li>Proses seleksi tahap 2 akan dilaksanakan di Gedung J Universitas Muhammadiyah Purwokerto lantai 5 pada tanggal 25 November 2017.</li>
      <li>Pada proses seleksi tahap 2, peserta akan diberikan soal essay akuntansi untuk dikerjakan dan di jawab dengan benar</li>
      <li>Proses seleksi tahap 2 akan disaring menjadi 10 besar terbaik untuk mengikuti seleksi tahap 3</li>
      <li>Peserta yang lolos ke tahap 3 akan dilakukan LCC atau Lomba Cerdas Cermat</li>
      <li>Peserta yang dinyatakan sebagai pemenang juara 1, juara 2 dan juara 3 akan mendapatkan hadiah</li>
      <li>Hadiah berupa Uang tunai dan juga trophy</li>
   </ol>

   <br>

   <p style="font-size: 8px">silahkan transfer <strong>Rp. 100.000,-</strong> paling lambat <strong>
   22 November 2017</strong> ke rekening berikut:</p>
   <br><br>
   
   <strong>
      BRI KK UMP Purwokerto
      a.n. Nur Isna Inayati :
      1792-01-001116-53-1
   </strong>
   
   <p>Kemudian silahkan upload foto bukti transfer ke 
   <a target="_blank" href="http://www.lombaakuntansi.ump.ac.id">lombaakuntansi.ump.ac.id</a>
   dengan cara login menggunakan akun masing masing</p>

   atau menghubungi <strong>Arifin : 0858-6993-0105</strong>

</div>
';
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('kwitansi.pdf', 'I');

?>
