<?php 
session_start();



 ?>

 <?php include('navbar_admin.php'); ?>

 <?php include "koneksi.php" ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                

 <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
            <h5 class="card-category">Selamat Datang, <?php echo$_SESSION['namaadmin']; ?> di Halaman Administrator Sistem Informasi Kuliah Praktek Universitas Perjuagan Tasikmalaya</h5>
                     <br>
            <div class="pcoded-content">

                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->

                    <div class="main-body">

                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[ daily sales section ] start-->
                                <div class="col-md-6 col-xl-4">
                                    <?php  
            // fungsi query untuk menampilkan data dari tabel 
            $query = mysqli_query($mysqli, "SELECT COUNT(id_mahasiswa) as jumlah FROM kp")
                                            or die('Ada kesalahan: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                                    <div class="card daily-sales">
                                        <div class="card-block">

                                            <h1 class="mb-4"><b><?php echo $data['jumlah']; ?> Orang</b></h1>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h4 class="f-w-300 d-flex align-items-center m-b-0"><b class="feather icon-box text-c-green f-30 m-r-10"></b>Telah Mengajukan</h4>
                                                </div>

                                            
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    
                                    <?php  
            // fungsi query untuk menampilkan data dari tabel 
            $query = mysqli_query($mysqli, "SELECT COUNT(id_mahasiswa) as jumlah FROM mahasiswa")
                                            or die('Ada kesalahan pada query tampil Data : '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                                    <div class="card daily-sales">
                                        <div class="card-block">

                                            <h1 class="mb-4"><b><?php echo $data['jumlah']; ?> Orang</b></h1>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h4 class="f-w-300 d-flex align-items-center m-b-0"><b class="feather icon-user text-c-green f-30 m-r-10"></b>Jumlah mahaSiswa</h4>
                                                </div>

                                            
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

         
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