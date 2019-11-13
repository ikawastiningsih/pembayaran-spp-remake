<section class="content-header">
      <h1>
        Beranda
      </h1>
    </section>

<section class="col-lg-12 connectedSortable">   
          <div class="box box-success">
          <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>
        <div class="box-body">
       
     <h4><p style="text-align:center">Anda Berhasil login sebagai TATA USAHA</p></h4>
    <?php
    include 'config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['nama_pegawai']."</h3>"
    ?>
    <h4><p style="text-align:center"></p></h4>
    <?php
    $tanggal = Date("Y-m-d");
    Echo "<h5 align='center'>$tanggal</p></h5><br>";
   /* $bulan= date("m");
    echo "Bulan: $bulan";*/
    ?>

<br>
<br>
        </div>
        

        </section>