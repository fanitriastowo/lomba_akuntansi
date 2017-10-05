<!DOCTYPE html>
<html>
<head>
   <title>Admin Panel</title>
   <?php $this->load->view('template/css'); ?>
</head>
<body>

   <div class="container">
      <div class="panel panel-default">
         <div class="panel-body">
         <h1 class="text-center">Admin Panel</h1>
         <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
         </div>
         <div class="panel-footer">
         <a class="btn btn-primary btn-md btn-block" href="<?php echo site_url('administrator/logout'); ?>">Logout</a>
         </div>

      </div>
   </div>

   <?php $this->load->view('template/js'); ?>
</body>
</html>