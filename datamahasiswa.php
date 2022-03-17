<?php 
  session_start();
  require 'function1.php';
  include 'koneksi.php';

  //Pagination 


  $jumlahdataperhalaman = 10;
  $jumlahdata = count( query ("SELECT * FROM mahasiswa") );
  $jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman );
  $halamanaktif = (isset($_GET["halaman"]) ) ? $_GET ["halaman"] : 1 ;
  $awaldata = ( $jumlahdataperhalaman * $halamanaktif ) - $jumlahdataperhalaman;




  $pkl = query("SELECT * FROM mahasiswa LIMIT $awaldata, $jumlahdataperhalaman");

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
                <h5 class="card-category">Data mahaSiswa SMK KARYA NASIONAL CIAMIS</h5>
                <a href="tambahmahasiswa.php"> <center>Tambah mahaSiswa</center></a>
                
               <!--Tambah pkl
                <a href="addpkl.php"> <center>Tambah pkl</center></a> 
                ending tambah pkl-->
              </div>
              <div class="card-body">

                <div class="table-responsive">
                <table class="table table-striped table-bordered nowrap">
                
                <thead>
                      <tr>
                        <th width="4%">No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>E-Mail</th> 
                        <th>No Hp</th> 
                        <th>Username</th> 
                        <th>Password</th> 
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php $i=1; ?>
                      <?php foreach ($pkl as $row): ?>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["nis"] ?></td>
                        <td><?php echo $row["namamahasiswa"] ?></td>
                        <td><?php echo $row["kelas"] ?></td>
                        <td><?php echo $row["jurusan"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["nohp"] ?></td>
                        <td><?php echo $row["uname"] ?></td>
                        <td><?php echo $row["pass"] ?></td>
                        
                        <td><a href="hapus_mahasiswa.php?id_mahasiswa= <?php echo $row["id_mahasiswa"]; ?>" onclick="return confirm('Hapus Data mahaSiswa Ini?');">Hapus</a></td>
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
            <a href="unper.ac.id" target="unper.ac.id">Teknik Informatika, Universitas Perjuangan Tasikmalaya</a>
          </div>
        </div>
      </footer>
</div>

