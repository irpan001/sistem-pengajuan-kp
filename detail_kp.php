<?php 
  session_start();
  require 'function.php';
  $id_pengajuan = $_GET["id_pengajuan"];
  
  $dkp = query("SELECT * FROM kp WHERE id_pengajuan =  $id_pengajuan")[0];




 ?>
 <?php include('navbar_mahasiswa.php'); ?>

 <div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">
    
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category" align="center">STATUS PENGAJUAN PRAKTEK KERJA LAPANGAN</h5>
               
              </div>
              <div class="card-body">
              <form action="" method="post">
                
          <div class="table-responsive">
                
                <h5 class="card-category" align="center"><?php if($dkp ["status"] == 0) { ?>

                           
                            <b class="m-0 text-c-black">Hallo! <?php echo $dkp["nama"]; ?>, Mohon Menunggu. Pengajuan Praktek Kerja Lapangan Anda Sedang di Proses</b>

                        <?php }elseif ($dkp ["status"] == 1) { ?>
                          
                            <b class="m-0 text-c-green">SELAMAT! <?php echo $dkp["nama"]; ?> Pengajuan Praktek Kerja Lapangan Anda telah DISETUJUI </b><br>
                            <h5><a href="sk_kp.php">cetak </a></h5>

                          
                        <?php }elseif ($dkp["status"] == 2) { ?>
                          
                            <div>
                            <b class="m-0 text-c-red">Mohon Maaf <?php echo $dkp["nama"]; ?> Pengajuan Praktek Kerja Lapangan Anda Tidak Disetujui, Mohon Ajukan Ulang!</b>
                            </div>
                            <label>.</label>
                  <input type="text" class="form-control" name="ulasan" disabled="" value="Alasan Tidak disetuji : <?php echo $dkp["ulasan"]; ?>" >
                          
                        <?php }?></h5>

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
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>