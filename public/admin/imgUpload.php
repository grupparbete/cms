<?php
include("connect.php");

  function GetImageExtension($imagetyp){
    if(empty($imagetyp)) return false;
    switch($imagetyp){
      case 'image/bmp' : return '.bmp';
      case 'image/gif' : return '.gif';
      case 'image/jpeg' : return '.jpeg';
      case 'image/png' : return '.png';
      default: return false;
    }
  }


if (!empty($_FILES["uploadedimage"]["name"])){

  $file_name = $_FILES["uploadedimage"]["name"];
  $temp_name = $_FILES["uploadedimage"]["tmp_name"];
  $imgtype = $_FILES["uploadedimage"]["type"];
  $ext = GetImageExtension($imgtype);
  $imagename = date("d-m-Y")."-".time().$ext;
  $target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)){

  $query_upload=" INSERT into 'images_tbl' ('images_path', 'submission_date') VALUES ('".$target_path."', '".date("Y-m-d")."')";
  mysql_query($query_upload) or die("error in $query_upload == ---->".mysql_error());
}else{
  exit("error while uploading the image");
}
}

?>
