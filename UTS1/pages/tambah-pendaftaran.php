<?php 
include 'layouts/header.php';
include 'layouts/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Tambah Data Pendaftaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tambah Data Pendaftaran</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="" method="POST">
                     <div class="card-body">
                        <div class="form-group">
                           <label for="noreg">Nomor Registrasi</label>
                           <input type="text" name="no_registrasi" class="form-control" id="noreg" placeholder="Masukkan Nomor Registrasi" required>
                        </div>
                        <div class="form-group">
                           <label for="nama">Nama Lenkap</label>
                           <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                           <label for="jurusan">Jurusan</label>
                           <select name="jurusan" id="jurusan" class="form-control" required>
                              <option disabled selected>Pilih Jurusan</option>
                              <option value="mik">Manajemen Informatika & Komputer</option>
                              <option value="akp">Akuntansi Perkantoran</option>
                              <option value="adp">Administrasi Perkantoran</option>
                              <option value="its">IT Support</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="jekel">Jenis Kelamin</label>
                           <select name="jenis_kelamin" id="jekel" class="form-control" required>
                              <option disabled selected>Pilih Jenis Kelamin</option>
                              <option value="l">Laki-laki</option>
                              <option value="p">Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="alamat">Alamat</label>
                           <textarea name="alamat" id="alamat" rows="5" class="form-control" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                        <div class="form-group">
                           <label for="telepon">Nomor Telepon</label>
                           <input type="number" name="no_telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                           <label for="email">E-Mail</label>
                           <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan E-mail" required>
                        </div>
                     </div>
                     <!-- /.card-body -->

                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 
include 'layouts/footer.php';
?>