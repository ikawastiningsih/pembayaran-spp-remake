<?php

include'config/koneksi.php';

?>

<section class="content-header">
  <h1>
    Rekap Tahunan
  </h1>
 </section>
<div class="col-md-12">
<!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">Rekap Tahunan Pembayaran</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
    <div class="table-responsive">
         <div class="col-sm-12">
      <form action="" method="POST">
           <thead>
            <tbody>
             <tr>
             <td>
              <select name="tahunajaran" class="form-control">
               <option>Pilih Tahun Ajaran</option>
                <?php
                $ta = "SELECT * FROM tahun_ajaran";
                $queryta = mysqli_query($konek,$ta);
                while ($tampilta = mysqli_fetch_array($queryta)) { ?>
                <option value="<?php echo $tampilta['tahunajaran'] ?>"><?php echo $tampilta["tahunajaran"] ?>
                </option>
                <?php
                }
                ?>
         </select>
    </td>
    <br>
    <td>
    
    </select>
    </td>
    <br>
      <td align="center"><button type="submit" class="btn btn-info btn-block" name="cari">Pilih</button></td>
      </tr>
      <br>
      <br>
      </div>

    <?php

    if(isset($_POST['cari'])){

      $tahunajaran = $_POST['tahunajaran'];
                    
    ?>


   <script>

   window.location = 'home.php?konten=tahunan&&tahunajaran=<?php echo $tahunajaran; ?>';

   </script> 


 <?php
   }
                    
 ?>

      <?php
        if(isset($_GET['tahunajaran'])){
                   
        ?>

      <table class="table table-bordered" id="" width="100%" cellspacing="0">
      <thead>
      <tbody>
      <tr>
      <th class="bg-info"><center>No</center></th>
      <th class="bg-info"><center>NIS</center></th>
      <th class="bg-info"><center>Tahun Ajaran</center></th>
      <th class="bg-info"><center>Nama Siswa</center></th>
      <th class="bg-info"><center>Kelas</center></th>
      <th class="bg-info"><center>Bulan</center></th>
      <th class="bg-info"><center>Tanggal Pembayaran</center></th>
      </tr>

        <?php

        $tahunajaran = $_GET['tahunajaran'];

        include 'config/koneksi.php'; 

        $no = 1;
        $query1 = "SELECT * FROM master_spp where tahunajaran = '$tahunajaran'";

        $tampil1 = mysqli_query($konek, $query1);


        ?>


        <?php
        if(!mysqli_num_rows($tampil1)) {
          echo "Tidak ada data!";

          } else {
          while($row = mysqli_fetch_array($tampil1)) { ?>
          <tr>
          <td><center><?php echo $no++; ?></center></td>
          <td><center><?php echo $row['nis']; ?></center></td>
          <td><center><?php echo $row['tahunajaran']; ?></center></td>
          <td><center><?php echo $row['nama_siswa']; ?></center></td>
          <td><center><?php echo $row['kelas']; ?></center></td>
          <td><center><?php echo $row['bulan']; ?></center></td>
          <td><center><?php echo date ('d-m-Y', strtotime(($row ['tgl_pembayaran']))); ?></center></td>
          </tr>


        <?php }

        ?>
                
        <a href="cetakreport-penjualan.php?print=1&bln=<?php echo $_GET['bln'];?>&thn=<?php echo $_GET['thn']; ?>" target ="_blank" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>

        <?php }
         ?>

        </tbody>
        <?php

        $tahunajaran = $_GET['tahunajaran'];
        $sum = "SELECT SUM(total) as tot FROM master_spp where tahunajaran = '$tahunajaran'";
        $tampil3 = mysqli_query($konek,$sum) or die (mysqli_error($konek));
        $row1 = mysqli_fetch_array($tampil3);

        ?>

      <tr>
      <td colspan="6">Total Pemasukan Tahun Ajaran <?php echo $tahunajaran; ?> : </td>
      <td><?php echo 'Rp.'. number_format($row1['tot']); ?></td>

        <?php }
        ?>

        </tbody>
       
      </thead>
      </table>
      </tbody>
      </thead>
      </table>
    </form>
    </tr>
  </thead>
</table>
</tbody>
</thead>
</table>
</form>
</div>
