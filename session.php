<?php
//Mendefinisikan fungsi session_check yang menerima satu parameter $status, dengan nilai default false.
function session_check($status = false) {
  if($status) {
    // Memeriksa apakah variabel sesi $_SESSION['username'] sudah diatur (berarti pengguna sudah login).
    if(isset($_SESSION['username'])) {
      header('Location: home.php');
      exit;
    }    
  } else {
    // Memeriksa apakah variabel sesi $_SESSION['username'] tidak diatur (berarti pengguna belum login).
    if(!isset($_SESSION['username'])) {
    // Jika $_SESSION['username'] tidak diatur, maka menyimpan pesan kesalahan dalam variabel $_SESSION['alert'].
      $_SESSION['alert'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Access denied!</strong> Please login first.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
      header('Location: index.php');
      exit;
    }  
  }
}
