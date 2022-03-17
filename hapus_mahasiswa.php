<?php 

require 'function1.php';
include 'koneksi.php';

$id_mahasiswa  = $_GET["id_mahasiswa"];

if (hapusmahasiswa($id_mahasiswa)>0) {
	 echo "
            <script>
              alert('data berhasil dihapus');
              document.location.href= 'datamahasiswa.php';
            </script>
            ";
}else {
 echo "
            <script>
              alert('data gagal dihapus');
              document.location.href= 'datamahasiswa.php';
            </script>
            ";


}





 ?>