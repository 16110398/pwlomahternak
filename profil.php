<?php 
  if(!isset($_SESSION['pelanggan'])) {
     header('location:login.php'); 
  } else { 
     $data = $_SESSION['pelanggan']; 
  }
  require_once 'cek.php';
?>
<div class="container-fluid" style="margin-top: 95px; margin-bottom: 50px;">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-12 col-md-3 col-lg-3 mb-1">
      <div class="card">

        <div class="container">
        <div class="row">
          <div class="col-12 mt-3">
             <img class="rounded-circle mx-auto d-block img-fluid" src="foto_peternak/<?php echo $data['img_profil']; ?>" height="150" width="150">
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <a href="index.php?halaman=profil" style="text-decoration: none;"><h6 class="text-dark"><i class="fas fa-user"></i>  <strong>Profil Saya</strong></h6></a>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h6 class="text-success"><i class="fas fa-id-card"></i>  <strong><?php echo $data['nama']; ?></strong></h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6 class="text-success"><i class="fas fa-phone"></i>  <?php echo $data['telepon']; ?></h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6 class="text-success"><i class="fas fa-envelope"></i></i>  <?php echo $data['email']; ?></h6>
            <hr>
          </div>
        </div>
         <div class="row">
          <div class="col-12">
            <h6 class="text-success"><i class="fas fa-map-marker-alt"></i>  <?php echo $data['alamat']; ?></h6>
            <hr>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="btn btn-success btn-block" href="index.php?halaman=profil&page=edit">Ubah Profil</a>
          </div>
        </div>
        <hr/>

        <div class="row mb-3">
          <div class="col-12">
            <h5>Transaksi Saya</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="text-success" href="index.php?halaman=profil&page=penjualan" style="text-decoration: none;"><strong><i class="fas fa-tags"></i> Penjualan</strong></a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="text-success" href="index.php?halaman=profil&page=pembelian" style="text-decoration: none;"><strong><i class="far fa-money-bill-alt"></i> Pembelian</strong></a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="text-success" href="index.php?halaman=profil&page=sertifikat" style="text-decoration: none;"><strong><i class="fas fa-file-alt"></i>  Sertifikat</strong></a>
          </div>
        </div>

        <hr>
         <div class="row mb-3">
          <div class="col-12">
            <h5>Kotak Masuk</h5>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="text-success" href="index.php?halaman=profil&page=penjualan" style="text-decoration: none;"><strong><i class="fas fa-envelope"></i> Pesan</strong></a>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <a class="text-success" href="index.php?halaman=profil&page=penjualan" style="text-decoration: none;"><strong><i class="fas fa-comment-dots"></i> Komentar</strong></a>
          </div>
        </div>

      </div>
      </div>
    </div>

    <div class="col-12 col-md-9 col-lg-9">
      <div class="card h-100">
          <div class="container mt-4">
              <?php 
                if (isset($_GET['page'])) 
                {
                  if ($_GET['page']=="edit") {
                    include 'editprofil.php';
                  }
                  if ($_GET['page']=="editproduk") {
                    include 'editproduk.php';
                  }
                  if ($_GET['page']=="tambahternak") {
                    include 'tambahternak.php';
                  }
                  if ($_GET['page']=="penjualan") {
                    include 'penjualan.php';
                  }

                }else{
                  include 'myprofil.php';
                }

               ?>
          </div>
      </div>
    </div>

  </div>
</div>


