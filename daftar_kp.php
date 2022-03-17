<?php 
session_start();
require 'function.php';

  if(isset($_POST['terbit'])) {

    if ( addkp($_POST) >0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan');
              document.location.href= 'kp_mahasiswa.php';
            </script>
            ";
    }else{
        echo "
            <script>
              alert('data gagal ditambahkan');
              document.location.href= 'kp_mahasiswa.php';
            </script>
            ";
    }




  }


 ?>

<?php include('navbar_mahasiswa.php'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">
   
        <div class="content">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Upload Persyaratan</h5>
              </div>
              <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row">
                  
                  <label>Scan Data Transkrip Nilai Anda, Kemudian Upload kedalam satu file berformat (.pdf) </label>
                  <input type="file" class="btn btn-primary btn-round" name="pdf">

                  
                </div>
              </div>
            </div>
          </div>

      <div class="content">
        <div class="row">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Form Pengajuan Praktek Kerja Lapangan</h5> 
              </div>
              <div class="card-body">   
                <div class="form-row">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" disabled="" value="<?php echo$_SESSION['nis']; ?>" >
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" disabled="" value="<?php echo$_SESSION['namamahasiswa']; ?>" >
                  <label>Kelas</label>
                  <input type="text" class="form-control" name="kelas" disabled="" value="<?php echo$_SESSION['kelas']; ?>" >
                  <label>Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" disabled="" value="<?php echo$_SESSION['jurusan']; ?>" >
                  

                                                           <label for="pembimbing">Pembimbing</label>
                                                            <select name="pembimbing" class="form-control" id="pembimbing">
                                                                <option>Pilih Dosen Pembimbing</option>
                                                                <option value="Asih Mustika">Asih Mustika</option>
                                                                <option value="Lastri Agustin">Lastri Agustin</option>
                                                            </select>
                
                      <label>Tanggal</label>
                      <input type="date" class="form-control" name="tanggalmulai" required>

                  <label>Judul Kuliah Praktek</label>
                  <input type="text" class="form-control" placeholder="Masukkan Judul Kuliah Praktek yang Diinginkan" name="judulkp" required>

                  <input type="hidden" name="id_mahasiswa" value="<?php echo$_SESSION['id_mahasiswa']; ?>" >
                
                  <input type="hidden" name="status" value="0">

                  <input type="hidden" name="ulasan" value="0">
                 
                  </div><br>
                  <button class="btn btn-primary" name="terbit">Ajukan</button>
              
              </form>

              </div>
            </div>
          </div>
        
        
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="" target="_blank">Teknik Informatika, Universitas Perjuangan Tasikmalaya</a>
          </div>
        </div>
      </footer>
    </div>
  </div>

</body>

</html>