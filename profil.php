<?php 
  if(!isset($_SESSION['pelanggan'])) {
     header('location:login.php'); 
  } else { 
     $data = $_SESSION['pelanggan']; 
  }

?>
<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-12 col-md-4 col-lg-4 mb-1">
      <div class="card">

        <div class="container">
        <div class="row">
          <div class="col-12 mt-3">
             <img class="rounded-circle mx-auto d-block" src="foto_peternak/<?php echo $data['img_profil']; ?>" height="200" width="200">
          </div>
        </div>
        <hr>
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

      </div>


      </div>
    </div>

    <div class="col-12 col-md-8 col-lg-8">
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


                }else{
                  include 'homeprofil.php';
                }

               ?>
          </div>
      </div>
    </div>

  </div>
</div>


