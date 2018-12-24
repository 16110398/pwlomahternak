<?php 
$kd_ternak = $_GET["id"];
$detail = mysqli_query($koneksi, "SELECT * FROM ternak JOIN pelanggan ON ternak.id_user=pelanggan.id_user WHERE kd_ternak='$kd_ternak'");
$ternak = $detail->fetch_assoc(); 

?>

<!--<div class="container" style="margin-top: 70px;">
  <h5>Detail Produk Coming Soon</h5>
  <?php 
  echo "<pre>"; 
  print_r($ternak); 
  echo "</pre>";
  ?>
</div> -->
<div class="container" style="margin-top: 80px;">
      <?php 
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $produk = mysqli_query($koneksi, "SELECT * FROM ternak WHERE nama_ternak like '%".$cari."%' ");
            echo "<meta http-equiv='refresh' content='l;url=detail_cari.php?cari=$cari'>";
                
        }
    ?>

  <ul class="breadcrumb bg-light border">
    <li class="breadcrumb-item text-success"><a class="text-success" href="index.php">Home</a></li>
    <li class="breadcrumb-item text-success"><a class="text-success" href="index.php?halaman=cari">Ternak</a></li>
    <li class="breadcrumb-item active"><?php echo $ternak['nama_ternak']; ?></li>
  </ul>
  <div class="row">
    <div class="col-12 col-md-12 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">
          <div class="col-12 col-md-5 col-lg-5">
            <div class="ml-2 my-3 mr-2">
                <img class="d-block img-fluid" src="foto_produk/<?php echo $ternak['foto'];?>" style="height: 220px; width:100%;">
            </div>
          </div>
          <div class="col-12 col-md-7 col-lg-7">
            <div class="row mr-1">
              <div class="col-12 my-3">
                <h3 class="text-success ml-3"><?php echo $ternak['nama_ternak']; ?></h3>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12">
                <h6 class="ml-3">Berat : <?php echo $ternak['berat']; ?> Kg</h6>
                <h6 class="ml-3">Umur : <?php echo $ternak['umur']; ?> Tahun</h6>
                <h6 class="ml-3">Kategori : <?php echo $ternak['jenis_ternak']; ?></h6>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12">
                <h4 class="text-warning ml-3">Rp. <?php echo number_format($ternak['harga']);?>,- /Ekor</h4>
                <h6 class="text-dark ml-3">Minimal Pembelian : <?php echo $ternak['minim_beli']; ?> Ekor</h6>
                <h6 class="text-info ml-3">Stok : <?php echo $ternak['jumlah']; ?> Ekor</h6>
                <hr>
              </div>
            </div>
            <div class="row mr-1">
              <div class="col-12 ml-2">
                <a href="beli.php?id=<?php echo $ternak['kd_ternak']; ?>" class="btn btn-success btn-block d-block" type="submit" title="Keranjang Belanja"><i class="fas fa-shopping-cart fa-md"></i> <strong>BELI SEKARANG</strong></a>
              </div>
              <div class="col-12 my-3">
                <div class="card border ml-3">
                  <p class="ml-2 mr-2 my-2 d-block"><strong>Transaksi Aman Gunakan Rekening Bersama Omahternak</strong><br/>
                    1. Hanya pembayaran melalui rekening an Omahternak.id dijamin 100% aman. <a href="">Lihat selengkapnya </a> <br/> 2. Uang akan dikembalikan jika barang tidak diterima
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-12 col-lg-3 col-xl-3 my-1">
      <div class="card bg-white">

      <div class="container">
        <div class="row my-3 ml-1">
          <div class="col-12">
            <h5 class="text-success my-1 ml-1">Profil Peternak</h5>
          </div>
        </div>
        <hr/>
        <div class="row my-3">
          <div class="col-md-4">
            <img src="foto_peternak/<?php echo $ternak['img_profil']; ?>" class="rounded-circle ml-2" alt="fotoprofil" width="80" height="80">
          </div>
          <div class="col-md-8">
            <h5 class="text-dark ml-3 mr-1 my-1"><?php echo $ternak['nama']; ?></h5>
          </div>
        </div>
       
        <div class="row">
          <div class="col-12">
            <hr>
            <p class="ml-4"><i class="fas fa-phone"></i> <?php echo $ternak['telepon']; ?></p>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="ml-4"><i class="fas fa-map-marker-alt"></i> <?php echo $ternak['alamat']; ?></p>
            <hr>
          </div>
        </div>

         <div class="row">
          <div class="col-12 mb-3">
            <?php if(isset($_SESSION["pelanggan"])): ?>
              <form method="post">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#Pesan">Kirim Pesan</a>
              </form>
            <?php else: ?>
              <form method="post">
                <input class="btn btn-success btn-block" type="submit" name="kpesan" value="Kirim Pesan">
              </form>
            <?php endif ?>
          </div>
          <?php if(isset($_POST['kpesan'])) 
            {
              echo "<script>alert('Anda harus Login!');</script>";
              echo "<meta http-equiv='refresh' content='1;url=login.php'>";
            }
          ?>
        </div>

      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Pesan">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
       
      <div class="modal-header">
        <h4 class="modal-title">Kirim Pesan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label>Pesan :</label>
            <textarea class="form-control" rows="5"  name="tekpesan"></textarea>
          </div>
          <input type="submit" class="btn btn-primary float-right" name="kirim" value="Kirim">
        </form>
     
      </div>
         
    </div>
  </div>
</div>


<div class="container my-3">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">
            <div class="container">

              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">Sertifikat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Deskripsi Ternak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">Komentar</a>
                </li>
              </ul>

              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                  <h5>SERTIFIKAT</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                  <h5>DESKRIPSI PRODUK</h5>
                  <p><?php echo $ternak['deskripsi']; ?></p>
                  
                </div>
                <div id="menu2" class="container tab-pane fade mb-4"><br>
                  <h5 class="ml-3 mb-2">KOMENTAR</h5>
                  <div class="container">
                       <form method="post">
                        <div class="form-group">
                          <label for="komen">Pesan :</label>
                          <textarea class="form-control" rows="5" id="komen" name="komen"></textarea>
                        </div>
                        <?php if(isset($_SESSION["pelanggan"])): ?>
                          <input type="submit" class="btn btn-primary float-right btn-block mb-4" name="komentar" value="Kirim">
                        <?php else: ?>
                          <input type="submit" class="btn btn-primary float-right btn-block mb-4" name="komentar1" value="Kirim">
                        <?php endif ?>
                      </form>
                      <?php if(isset($_POST['komentar1'])) 
                        {
                          echo "<script>alert('Anda harus Login!');</script>";
                          echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                        }
                      ?>
                  </div>
                  
                  <div class="container mt-5">
                     <hr/>
                    <div class="card">
                       <div class="card-body">
                        <p>User  : </p>
                        <p>Pesan : </p>
                       </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container mb-4">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-9 col-xl-9 my-1">
      <div class="card bg-white">
        <div class="row">

          <div class="container">
            <h5 class="text-dark my-3 ml-3">Ternak Lainnya</h5>
            <div class="row my-2 mr-1 ml-1">
              <?php $produk = mysqli_query($koneksi, "SELECT * FROM ternak JOIN pelanggan ON ternak.id_user=pelanggan.id_user WHERE ternak.id_user='$ternak[id_user]' LIMIT 3 "); ?>
              <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="padding-bottom:15px; ; margin-top: 7px;">
                  <div class="card bg-white border">
                    <div class="kontainer bg-white rounded">
                      <a href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                          <img class="image img-fluid mx-auto" alt="responsive image" style="height:200px; width:100% ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                          <div class="middle">
                              <div class="tombol">Lihat Detail</div>
                          </div>
                      </a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="caption">
                        <a class="link-text" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>">
                        <h6 class="link-text text-success"><strong> <?php echo $perproduk['nama_ternak']; ?></strong></h6></a>
                        <h6 style="color:orange"> Rp. <?php echo number_format($perproduk['harga']);?>,- /Ekor</h6>
                        <h6 class="text-secondary">Jumlah Stok <?php echo number_format($perproduk['jumlah']);?> Ekor</h6>
                      </div>
                    </div>  
                  </div>
                </div>    
              <?php } ?>  
            </div>  

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php 
if(isset($_POST['kirim'])) 

    $con=mysqli_query($koneksi, "INSERT INTO pesan(id_user,id_pengirim,nama_pengirim,pesan) VALUES('$ternak[id_user]','$data[id_user]','$data[nama]','$_POST[tekpesan]');") or die("error");
  
?>