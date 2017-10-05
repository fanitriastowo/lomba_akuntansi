<!DOCTYPE html>
<html>
<head>
   <title>Welcome to CBT</title>

   <?php $this->load->view('template/css'); ?>
</head>
<body>

<div class="container">
   <pre>
      <h1><?php print_r($jawaban); ?></h1>
   </pre>
</div>

<?php $this->load->view('template/js'); ?>
</body>
</html>