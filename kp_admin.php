<?php 
  session_start();
  require 'function.php';

  //Pagination 


  $jumlahdataperhalaman = 10;
  $jumlahdata = count( query ("SELECT * FROM kp") );
  $jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman );
  $halamanaktif = (isset($_GET["halaman"]) ) ? $_GET ["halaman"] : 1 ;
  $awaldata = ( $jumlahdataperhalaman * $halamanaktif ) - $jumlahdataperhalaman;




  $kp = query("SELECT * FROM kp LIMIT $awaldata, $jumlahdataperhalaman");

 ?>

<?php include('navbar_admin.php'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Pengajuan Kuliah Praktek</h5>
                
               <!--Tambah kp
                <a href="addkp.php"> <center>Tambah kp</center></a> 
                ending tambah kp-->
              </div>
              <div class="card-body">

                <div class="table-responsive">
                <table class="table table-striped table-bordered nowrap">
                
                <thead>
                      <tr>
                        <th width="4%">No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Judul Kuliah Praktek</th> 
                        <th>Status</th>
                        <th>Lihat Lebih Detail</th>
                        
                        
                        <th><i class="feather icon-trash-2"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php $i=1; ?>
                      <?php foreach ($kp as $row): ?>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["nama"] ?></td>
                        <td><?php echo $row["kelas"] ?></td>
                        <td><?php echo $row["jurusan"] ?></td>
                        <td><?php echo $row["judulkp"] ?></td>
                       
                        
                        
                         <td>

                          <?php if($row ["status"] == 0) { ?>


                            <b class="m-0 text-c-purple">proses</b>

                        <?php }elseif ($row ["status"] == 1) { ?>
                          
                            <b class="m-0 text-c-green">disetujui</b>
                          
                        <?php }elseif ($row["status"] == 2) { ?>
                          
                          
                            <b class="m-0 text-c-red">tidak disetujui</b>
                          
                        <?php }?>
                        </td>
                        <td><a href="detail_kp_admin.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>" class="feather icon-eye" >Lihat</a></td>
                       
                        
                        <td><a href="hapus.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>" onclick="return confirm('Hapus Pengajuan?');">Hapus</a></td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                
                   
                    <!--Navigasi hlaman -->
                    <center>
                    <?php if ( $halamanaktif > 1) : ?>
                      <a href="?halaman=<?= $halamanaktif - 1;?>" class="now-ui-icons arrows-1_minimal-left"></a>
                    <?php endif; ?>

                        <?php for ( $h = 1; $h <= $jumlahhalaman; $h++ ) : ?>
                          <?php if ($h == $halamanaktif) : ?>
                            <a href="?halaman=<?= $h; ?>" style="font-size: large;"><?php echo $h; ?></a>
                          <?php else : ?>
                            <a href="?halaman=<?= $h; ?>" style="font-size: small;"><?php echo $h; ?></a>
                          <?php endif; ?>                      
                        <?php endfor; ?>
                      <?php if ( $halamanaktif < $jumlahhalaman) : ?>
                      <a href="?halaman=<?= $halamanaktif + 1;?>" class="now-ui-icons arrows-1_minimal-right"></a>
                    <?php endif; ?>
                    </center>

                    </tbody>
                  
                </table>
                </div>
              </div>
            </div>
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

