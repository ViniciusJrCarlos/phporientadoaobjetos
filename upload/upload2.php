<?php

    include ('classes/Upload.php');

<<<<<<< HEAD
  echo Upload::subir($_FILES['arq'],1048576,['image/gif', 'image/png', 'image/jpeg', 'image/pjpeg']);
=======
  echo Upload::subir($_FILES['arq'],100,['image/gif', 'image/png', 'image/jpeg', 'image/pjpeg']);
>>>>>>> b2df7e72e5759e3454f90a56eef562cb744ab927


?>