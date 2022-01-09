<?php

    include ('classes/Upload.php');

  echo Upload::subir($_FILES['arq'],100,['image/gif', 'image/png', 'image/jpeg', 'image/pjpeg']);


?>