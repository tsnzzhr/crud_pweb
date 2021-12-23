<?php
include("config.php");

if (isset($_POST['simpan'])) {

  if(!empty($_FILES["foto"]["name"])) { 
    // Get file info 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
   
    $fileName = basename($_FILES["foto"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $image = $_FILES['foto']['tmp_name']; 
    
    $fotobaru = date('dmYHis').$fileName;
    $path = "images/".$fotobaru;
    //$imgContent = addslashes(file_get_contents($image)); 
     
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes) && move_uploaded_file($image,$path)){ 
     
        // Insert image content into database 
        $sql = "UPDATE siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah', foto='$fotobaru' Where id='$id'";  
        $query = mysqli_query($db, $sql);

        if($sql){ 
            $status = 'success';
            $statusMsg = "File uploaded successfully.";
            header('Location: list.php?status=sukses');
        }else{ 
            $statusMsg = "File upload failed, please try again."; 
        }  
    }else{ 
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
    } 
  }else{ 
    $statusMsg = 'Please select an image file to upload.'; 
  } 
} else {
  die("Akses dilarang...");
}

echo $statusMsg;

?>
