<?php 
session_start();



 ?>

 <?php include('navbar_mahasiswa.php'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">

    
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Profile <?php echo$_SESSION['namamahasiswa']; ?></h5>
              </div>
              <div class="card-body">
                <form>

                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['namamahasiswa']; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nomor Induk mahasiswa</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['nis']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['kelas']; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['jurusan']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nomer HP</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['nohp']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo$_SESSION['email']; ?>">
                      </div>
                    </div>
                  </div>
                  

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