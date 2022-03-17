<?php 
  session_start();
  require 'function.php';
  $id_pengajuan = $_GET["id_pengajuan"];
  
  $dkp = query("SELECT * FROM kp WHERE id_pengajuan =  $id_pengajuan")[0];



  if(isset($_POST['update'])) {

    if ( updatestatus($_POST) >0 ) {
      echo "
            <script>
              alert('data berhasil ditambahkan');
              document.location.href= 'kp_admin.php';
            </script>
            ";
    }else{
        echo "
            <script>
              alert('data gagal ditambahkan');
              document.location.href= 'kp_admin.php';
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
                <h5 class="card-category">Detail Data Pengajuan Praktek Kerja Lapangan</h5> 
              </div>
              <div class="card-body">   
                <div class="form-row">
                   <label>Nama</label>
                  <input type="text" class="form-control" name="nama" disabled="" value="<?php echo $dkp["nama"]; ?>" >

                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" disabled="" value="<?php echo $dkp["nis"]; ?>" >

                   <label>kelas</label>
                  <input type="text" class="form-control" name="kelas" disabled="" value="<?php echo $dkp["kelas"]; ?>" >

                   <label>jurusan</label>
                  <input type="text" class="form-control" name="jurusan" disabled="" value="<?php echo $dkp["jurusan"]; ?>" >

                   <label>Judul Kuliah Praktek</label>
                  <input type="text" class="form-control" name="judulkp" disabled="" value="<?php echo $dkp["judulkp"]; ?>" >

                   <label>pembimbing</label>
                  <input type="text" class="form-control" name="pembimbing" disabled="" value="<?php echo $dkp["id_pembimbing"]; ?>" >

                   <label>tanggal</label>
                  <input type="text" class="form-control" name="tanggalmulai" disabled="" value="<?php echo $dkp["tanggalmulai"]; ?>" >

 

                  <div>
                  <br>
                <a href='filepdf/<?php echo $dkp["pdf"] ?>' target='_blank' title='view'><i class='fa fa-file fa-lg'></i> &nbsp;Lihat Persyaratan kp</a>
                </div>
               
                  

              </div>
            </div>

            <div class="card-header">
                <h5 class="card-category">Persetujuan kp</h5> 
              </div>

            <div class="card-body">   
                
                <form action="" method="post">
            <!--inputan hidden-->
            <input type="hidden" name="id_pengajuan" value="<?php echo$dkp["id_pengajuan"]; ?>">
            <!-- . -->
          <div class="row">
        
              
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
           
                        
                        <td class="text-left"></td>
                        <td class="td-actions text-right"><?php if($_SESSION['level'] == "admin"){?>
                           <div class="form-group">
                      <label>Proses</label>
                              
                              <select class="form-control" name="status">
                                <option><?php if($dkp["status"] == 0) {

                                  echo "Pending";
                                }elseif ($dkp["status"] == 1 ) {
                                  echo "Setuju";
                                }elseif ($dkp["status"] == 2) {
                                  echo "Tidak Setuju";
                                } ?> </option>
                                <option value="1" >Setuju</option>
                                <option value="2">Tidak Setuju</option>
                              </select>
                            </div>





                        <?php }elseif ($dkp ["status"] == 0) { ?>

                          <input type="hidden" name="status" value="0">

                            <i class="now-ui-icons arrows-1_refresh-69"></i>

                        <?php }elseif ($dkp ["status"] == 1) { ?>

                          <input type="hidden" name="status" value="1">
                        
                          
                            <i class="now-ui-icons ui-1_check"></i>
                          
                        <?php }elseif ($dkp["status"] == 2) { ?>

                          <input type="hidden" name="status" value="2">
                          
                          
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          
                        <?php }?> 
                      </div>
                
                   <label>Alasan Tidak Menyetujui</label>
                   <input type="text" class="form-control" placeholder="berikan ulasan" name="ulasan" required>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> 
                  <button class="btn btn-primary" name="update">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
                  
                
        </div>

         

      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="" target="_blank">Teknik Informatika A 2017</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
