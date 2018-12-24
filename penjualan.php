<div class="container">
  <div class="clearfix">
    <span class="float-left"><h2>Penjualan</h2></span>
    <span class="float-right"><a href="index.php?halaman=profil&page=tambahternak" class="btn btn-success btn-sm">Jual Ternak</a></span>
  </div>
  
  <br>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#allternak">Semua Ternak Saya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#setuju">Disetujui</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tolak">Ditolak</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#sertifikat">Sertifkat</a>
    </li>
  </ul>

  
  <div class="tab-content">
    <div id="allternak" class="container tab-pane active"><br>
      <h3>Ternak Saya</h3>
      <div class="row">
    <?php 
                      $produk = mysqli_query($koneksi, "SELECT * FROM ternak JOIN pelanggan ON ternak.id_user=pelanggan.id_user WHERE ternak.id_user='$data[id_user]' "); ?>
                    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-bottom:15px; ; margin-top: 7px;">
                        <div class="card bg-white border">
                          <div class="kontainer bg-white rounded">
                            
                              <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                                <img class="image img-fluid mx-auto" alt="responsive image" style="height:150px; width:100% ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                                <div class="middle">
                                  <a class="text-success" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>" title="Lihat"><i class="fas fa-eye fa-lg"></i></a>
                                  <a class="ml-2 mr-2" href="index.php?halaman=profil&page=editproduk&id=<?php echo $perproduk['kd_ternak'];?>" title="Edit"><i class="fas fa-edit fa-lg"></i></a>
                                  <a class="text-danger" href="index.php?halaman=profil&page=hapusproduk&id=<?php echo $perproduk['kd_ternak'];?>" title="Hapus"><i class="fas fa-trash-alt fa-lg"></i></a>
                                </div>                           
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
                  </div><!-- row!-->                
    </div>
    <div id="setuju" class="container tab-pane fade"><br>
      <h3>Ternak Yang Disetujui</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="tolak" class="container tab-pane fade"><br>
      <h3>Ternak Yang Ditolak</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="sertifikat" class="container tab-pane fade"><br>
      <h3>Sertifikat Ternak</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
