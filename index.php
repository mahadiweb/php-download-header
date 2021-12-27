<?php

   header("Content-Type: application/octet-stream");
   header("Content-Disposition: attachment; filename=". $_GET['name']);
   
   $path = $_GET['path'];

   if(isset($path))readfile($path);


?>
