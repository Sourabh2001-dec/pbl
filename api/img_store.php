<?php
    if (isset($_FILES['thumb_img'])) {
        $file = $_FILES['thumb_img'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png','gif');

  if (in_array($fileActualExt,$allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000000 ) {
        $fileNameNew = uniqid('',true).'.'.$fileActualExt;

        $fileDestination = '../resources/userfiles/'.$fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination);
        $imgfile = "resources/userfiles/".$fileNameNew;
        echo $imgfile;

      }else {
        echo "failed1";
      }
    }else {
    echo "failed2";
  }
  }else {
    echo "failed3";
  }
    }