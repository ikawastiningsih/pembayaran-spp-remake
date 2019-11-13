<section class="content-header">
  <h1>
    Tambah Tahun Ajaran

  </h1>
 </section>
<div class="col-md-12">
<!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">Masukkan Tahun Ajaran Baru</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<form class="form-horizontal" action="config/tambahtaproses.php" method="POST">
  <div class="box-body">
  <div class="form-group">
      <label class="col-sm-3 control-label">Masukkan Angkatan Baru</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="angkatan" placeholder="Angkatan" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Masukkan Tahun Ajaran Baru</label>
      <div class="col-sm-8">
       <input class="form-control" type="text" name="tahunajaran" placeholder="Tahun Ajaran" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Masukkan Total SPP Baru</label>
      <div class="col-sm-8">
       <input class="form-control" type="text" name="total_spp" placeholder="Total" required>
      </div>
    </div>
    
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-info pull-right">Tambah</button>
  </div>
  <!-- /.box-footer -->
</form>
<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tahun Ajaran</h3>
    </div>
<!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Angkatan</th>
          <th>Tahun Ajaran Masuk</th>
          <th>Total Pembayaran</th>
          <th colspan="2"><center>Aksi</center></th>
        </tr>
        <?php

            include 'config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tahun_ajaran")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['angkatan'].'</td>';
                        echo '<td>'.$data['tahunajaran'].'</td>';
                        echo '<td>'.$data['total_spp'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editta&&id_ta='.$data['id_ta'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletetaproses.php?id_ta='.$data['id_ta'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        $no++;  
                      }
                    }
              
                ?>
       
      </table>
    </div>
      
</div>
</div>
