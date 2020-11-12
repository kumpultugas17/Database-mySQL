<?php 
include '../koneksi.php';
include 'layouts/header.php';
include 'layouts/sidebar.php';

$result = "SELECT * FROM pendaftaran";
$data = mysqli_query($koneksi, $result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Data Pendaftaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Data Pendaftaran</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- Main row -->
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Bordered Table</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>                  
                           <tr>
                              <th style="width: 10px">#</th>
                              <th>No. Registrasi</th>
                              <th>Nama Lengkap</th>
                              <th>Jurusan</th>
                              <th>Jenis Kelamin</th>
                              <th>Nomor Telepon</th>
                              <th style="width: 145px">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $no=1; ?>
                           <?php foreach ($data as $row): ?>
                              <tr>
                                 <td><?= $no++; ?></td>
                                 <td><?= $row['no_registrasi']; ?></td>
                                 <td><?= $row['nama_lengkap']; ?></td>
                                 <td><?=                                  ($row['jurusan'] == 'mik') ? ('Manajemen Informatika & Komputer') : 
                                 (($row['jurusan'] == 'adp') ? ('Administrasi Perkantoran') : 
                                    (($row['jurusan'] == 'its') ? ('IT Support') : 
                                    ('Akuntansi Perkantoran'))); ?></td>
                                    <td><?= ($row['jenis_kelamin']=='l') ? ('Laki-laki') : ('Perempuan'); ?></td>
                                    <td><?= $row['no_telepon']; ?></td>
                                    <td>
                                       <button class="btn btn-xs btn-info">Detail</button>
                                       <button class="btn btn-xs btn-warning">Edit</button>
                                       <button class="btn btn-xs btn-danger" onclick="confirm('Yakin data akan dihapus ?')">Hapus</button>
                                    </td>
                                 </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                           <li class="page-item"><a class="page-link" href="#">«</a></li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row (main row) -->
         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   <?php 
   include 'layouts/footer.php';
   ?>