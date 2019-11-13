 <section class="content-header">
      <h1>
        Data Siswa Kelas X
      </h1>
    </section>

  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Siswa Kelas X</h3>
            </div>
            <div class="col-sm-1" align="Right">
          <a href="config/updatekelassepuluh.php"> <button class="btn btn-success">Update Naik Kelas</button></a><br><br>
         </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>No.</th>
                  <th>NIS</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                  <th>Tanggal Lahir</th>
                  <th colspan="4"><center>Aksi</center></th>
                </tr>
             <?php

            include 'config/koneksi.php';
            $batas  = 4;
            $hal    = @$_GET['hal'];
            if (empty($hal)) {
              $posisi = 0;
              $hal    = 1;
            } else {
              $posisi = ($hal - 1) * $batas;
            }
            if($_SERVER['REQUEST_METHOD'] == "POST") {
              $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
              if ($pencarian != '') {
                $sql = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE nis LIKE '%$pencarian%' OR nama_siswa LIKE '%$pencarian%' ORDER BY nis";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'X' ORDER BY nis ASC LIMIT $posisi, $batas ";
                $queryJml = "SELECT d_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'X' ORDER BY nis ";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'X' ORDER BY nis LIMIT $posisi, $batas ";
              $queryJml = "SELECT id_siswa, nis, nisn, nama_siswa, jk_siswa, kelas, tanggallahir_siswa FROM datasiswa WHERE kelas = 'X' ORDER BY nis";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="8" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nis'].'</td>';
                        echo '<td>'.$data['nisn'].'</td>';
                        echo '<td>'.$data['nama_siswa'].'</td>';
                        echo '<td>'.$data['jk_siswa'].'</td>';
                        echo '<td>'.$data['kelas'].'</td>';
                        echo '<td>'.$data['tanggallahir_siswa'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editdatasiswa&&id_siswa='.$data['id_siswa'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletesiswaproses.php?id_siswa='.$data['id_siswa'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                         echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Detail" href=home.php?konten=profilsiswa&&id_siswa='.$data['id_siswa'].'><i class="fa fa-info fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                    }
                    }
                ?>
              </table>
            
     <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li class ='page link'><a class = 'page-link' href=\"home.php?konten=duabelas&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class ='page link'><a class = 'page-link'>$i</a></li>";
              }
            }
          }
            ?>  
            </div>
            <!-- /.box-body -->
    
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
     
    </section>
  