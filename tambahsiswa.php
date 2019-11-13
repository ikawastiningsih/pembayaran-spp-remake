<section class="content-header">
  <h1>
    Tambah Data Siswa
  </h1>
 </section>
<div class="col-md-12">
<!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">Masukkan Data Siswa</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<form class="form-horizontal" action="config/tambahsiswaproses.php" method="POST">
  <div class="box-body">
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomor Induk Siswa</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="nis" placeholder="Masukkan Nomer Induk Siswa" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomor Induk Siswa Nasional</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="nisn" placeholder="Masukkan Nomer Induk Siswa Nasional" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomor Induk Siswa Nasional</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="nisn" placeholder="Masukkan Nomer Induk Siswa Nasional" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tahun Ajaran Masuk</label>
      <div class="col-sm-8">
        <select class="form-control" name="tahunajaran" id="tahun" required>
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
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Pembayaran Perbulan</label>
      <div class="col-sm-8">
       <input class="form-control" type="text" name="total_spp" id = "total" placeholder="Total Pembayaran" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nama Siswa</label>
      <div class="col-sm-8">
       <input class="form-control" type="text" name="nama_siswa" placeholder="Masukkan Nama Siswa" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Jenis Kelamin</label>
      <div class="col-sm-8">
       <select class="form-control" id="jk_siswa" name="jk_siswa">
                <option>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kelas</label>
      <div class="col-sm-8">
       <select class="form-control" id="kelas" name="kelas" required>
                <option>Pilih Kelas</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
            </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tempat Lahir</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="tempatlahir_siswa" placeholder="Masukkan Tempat Lahir Siswa" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tanggal Lahir</label>
      <div class="col-sm-8">
      <input class="form-control input-md" class="input-group date" name="tanggallahir_siswa" type="date" placeholder="Masukkan tanggal lahir anda" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomer Telepon</label>
      <div class="col-sm-8">
      <input class="form-control" type="number" name="notelp_siswa" placeholder="Masukkan Nomer	Telepon Siswa" required>
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-3 control-label">Alamat</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="alamat_siswa" placeholder="Masukkan Alamat Siswa" required> 
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-3 control-label">Agama</label>
      <div class="col-sm-8">
      <select class="form-control" id="agama_siswa" name="agama_siswa" required>
                <option>Pilih Agama</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Cu</option>
            </select>
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-3 control-label">Nama Ayah</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="namaayah_siswa" placeholder="Masukkan Nama Ayah Siswa">
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-3 control-label">Nama Ibu</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="namaibu_siswa" placeholder="Masukkan Nama Ibu Siswa">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomer Ujian Siswa</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="no_un" placeholder="Masukkan Nomer Ujian Siswa">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nomer Ijazah</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="no_ijazah" placeholder="Masukkan Nomer Ijazah Siswa">
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-success pull-right">Tambah</button>
  </div>
  <!-- /.box-footer -->
</form>
</div>
<script type="text/javascript">
$( "#tahun" ).change(function() {
  var tahunajaran = $("#tahun").val();
  console.log(tahun);
  $.ajax({
    url: "./ajaxspp.php?tahunajaran=" + tahunajaran,
    success: function(result){
        console.log(result);
      $("#total").val(result);

    }
  });
});
</script>