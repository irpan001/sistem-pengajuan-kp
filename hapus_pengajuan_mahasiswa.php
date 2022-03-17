<?php 

require 'function.php';
include 'koneksi.php';

$id_pengajuan  = $_GET["id_pengajuan"];

if (hapuspengajuan($id_pengajuan)>0) {
	 echo "
            <script>
              alert('data berhasil dihapus');
              document.location.href= 'kp_siswa.php';
            </script>
            ";
}else {
 echo "
            <script>
              alert('data gagal dihapus');
              document.location.href= 'kp_siswa.php';
            </script>
            ";


}





 ?>