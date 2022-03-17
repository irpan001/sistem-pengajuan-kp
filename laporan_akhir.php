<?php 
session_start();
require 'function2.php';

  if(isset($_POST['terbit'])) {

    if ( addlap($_POST) >0 ) {
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
                <h5 class="card-category">Upload Laporan Kuliah Praktek Format File PDF</h5>
              </div>
              <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row">
                  
                
                  <input type="file" class="btn btn-primary btn-round" name="pdf">
                  <input type="hidden"  name="nama" disabled="" value="<?php echo$_SESSION['namamahasiswa']; ?>" >
                  <input type="hidden" class="form-control" name="kelas" disabled="" value="<?php echo$_SESSION['kelas']; ?>" >
                  <input type="hidden" class="form-control" name="jurusan" disabled="" value="<?php echo$_SESSION['jurusan']; ?>" >

                  
                </div>
                <button class="btn btn-primary" name="terbit">Upload</button>
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