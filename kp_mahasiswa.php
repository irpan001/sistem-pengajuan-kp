<?php 
  session_start();
  require 'function.php';
  $id_mahasiswa = $_SESSION['id_mahasiswa'];
  $kp = query("SELECT * FROM kp WHERE id_mahasiswa = '$id_mahasiswa' ORDER BY id_mahasiswa");


 ?>

 <?php include('navbar_mahasiswa.php'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">

    
          <div class="panel-header panel-header-sm">
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Pengajuan Kuliah Praktek</h5>
                
               <a href="daftar_kp.php"> <center>Ajukan Kuliah Praktek</center></a>
              </div>
              <div class="card-body">
               
                  <div class="table-responsive">
                  <table id="data-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th width="4%">No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Pembimbing</th>
                        <th>Tanggal</th>
                        <th>Judul Kuliah Praktek</th>
                        <th>Status</th>
                        <th>Berkas</th>
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
                        <td><?php echo $row["id_pembimbing"] ?></td>
                        <td><?php echo $row["tanggalmulai"]?></td>
                        <td><?php echo $row["judulkp"] ?></td>
                         <td>

                          <?php if($row ["status"] == 0) { ?>

                            <a href="detail_kp.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>">
                            <b class="m-0 text-c-purple">Sedang di Proses</b>
                            </a>

                        <?php }elseif ($row ["status"] == 1) { ?>
                            
                            <a href="sk_kp.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>" target="_blank">
                            <b class="m-0 text-c-green">Disetujui</b>
                            </a>
                          
                        <?php }elseif ($row["status"] == 2) { ?>
                          
                            <a href="detail_kp.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>">
                            <b class="m-0 text-c-red">Tidak Disetujui</b>
                            </a>
                          
                        <?php }?>
                        </td>


                        
                        <td><a href='filepdf/<?php echo $row["pdf"] ?>'><i class="now-ui-icons arrows-1_cloud-download-93">  <?php echo $row["pdf"] ?></i></a></td>
                        <td><a href="hapus_pengajuan_mahasiswa.php?id_pengajuan= <?php echo $row["id_pengajuan"]; ?>" onclick="return confirm('Hapus Pengajuan Anda?');">Hapus</a></td>
                      </tr>
                     
                      <?php $i++; ?>
                      <?php endforeach; ?>


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
  </div>