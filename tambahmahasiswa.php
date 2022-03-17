<?php 
session_start();
include 'koneksi.php';
require 'function1.php';

  if(isset($_POST['terbit'])) {

    if ( addmahasiswa($_POST) >0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan');
              document.location.href= 'datamahasiswa.php';
            </script>
            ";
    }else{
        echo "
            <script>
              alert('data gagal ditambahkan');
              document.location.href= 'datamahasiswa.php';
            </script>
            ";
    }




  }


 ?>

<?php include('navbar_admin.php'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">
   


      <div class="content">
        <div class="row">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Tambah Mahasiswa</h5> 
              </div>
              <div class="card-body">   
                <div class="form-row">
                  <form class="form-row" action="" method="post">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis"  placeholder=" Masukkan Nomor Induk Mahasiswa" required >
               
                  <label>Nama</label>
                  <input type="text" class="form-control" name="namamahasiswa"  placeholder=" Masukkan Nama" required >

                  <label>Kelas</label>
                  <input type="text" class="form-control" name="kelas" placeholder=" Masukkan Kelas" required >

                  <label>Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" placeholder=" Masukkan Jurusan" required >

                  <label>E-mail</label>
                  <input type="text" class="form-control" placeholder=" Masukkan E-mail" name="email" required>

                  <label>Nomor HP</label>
                  <input type="text" class="form-control" placeholder=" Masukkan Nomor HP" name="nohp" required>

                  <label>Username</label>
                  <input type="text" class="form-control" placeholder=" Masukkan Username" name="uname" required>

                  <label>Password</label>
                  <input type="text" class="form-control" placeholder=" Masukkan Password" name="pass" required>

                  <input type="hidden" name="level" value="mahasiswa" >
                 
                  </div><br>
                  <button class="btn btn-primary" name="terbit">Tambahkan Mahasiswa</button>
              
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