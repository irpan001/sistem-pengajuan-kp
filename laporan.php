<?php 
  session_start();
  require 'function.php';

  
 $kp = query("SELECT * FROM kp");




 ?>

 <head>
<p align="left">
    
    <div>
    <img
        wid_pengajuanth="120"
        height="120"
        src="karnas.png"
        align="left"
        hspace="12"
    />
</p>

<p align="left">
    YAYASAN PENDIDIKAN KARYA NASIONAL
</p>

<p align="left">
    <strong>SMK KARYA NASIONAL (KARNAS) CIAMIS</strong>
</p>

<p align="left">
    Jl Raya Ancol, Sindangkasih-Ciamis, 46268.
</p>
<p align="left">
Telp (0265)7521244, Website : <a href="http://www.smkkarnascms.sch.id/">www.smkkarnascms.sch.id</a>
</p>

<div>
    <p align="center">
        <u></u>
    </p>
</div>

<p align="center">
    <strong><u></u></strong>
</p>
<p align="center">
    <strong><u></u></strong>
</p>
<p align="">
________________________________________________________________________________________________________________________________________________________
</p>
</p>
</p>
</head>
<br>

<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong><u>LAPORAN PENGAJUAN PRAKTEK KERJA LAPANGAN</u></strong>
<br><br>
<div>
 <table id="data-table" align="left" border="1" cellspacing="0" cellpadding="0" >

    
        

                <thead>
                      <tr>
                        <thead>
                        <th width="200" valign="top">No</th>
                        <th width="200" valign="top">Nama</th>
                        <th width="200" valign="top">Kelas</th>
                        <th width="200" valign="top">Jurusan</th>
                        <th width="200" valign="top">Judul Kuliah Praktek</th> 
                        <th width="200" valign="top">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php $i=1; ?>
                      <?php foreach ($kp as $row): ?>
                        <td width="200" valign="top"><p align="center"><?php echo $i; ?></p></td>
                        <td width="200" valign="top"><p align="center"><?php echo $row["nama"] ?></p></td>
                        <td width="200" valign="top"><p align="center"><?php echo $row["kelas"] ?></p></td>
                        <td width="200" valign="top"><p align="center"><?php echo $row["jurusan"] ?></p></td>
                        <td width="200" valign="top"><p align="center"><?php echo $row["judulkp"] ?></p></td>
                       
                        
                        
                         <td width="200" valign="top">
                            <p align="center">

                          <?php if($row ["status"] == 0) { ?>


                            <b class="m-0 text-c-purple">proses</b>

                        <?php }elseif ($row ["status"] == 1) { ?>
                          
                            <b class="m-0 text-c-green">Disetujui</b>
                          
                        <?php }elseif ($row["status"] == 2) { ?>
                          
                          
                            <b class="m-0 text-c-red">Tidak Disetujui</b></p>
                          
                        <?php }?>
                        
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                
                   
                    <!--Navigasi hlaman -->
                    
                    </tbody>
                  
                </table>
<script>
      window.print();
    </script>
