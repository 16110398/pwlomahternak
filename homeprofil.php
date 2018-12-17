            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#home">Ternak Saya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu1">Penjualan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu2">Pembelian</a>
                </li>
            </ul>

              
              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                      <h3>Daftar Ternak</h3>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <h3 class="float-right"><a class="btn btn-success" href="index.php?halaman=profil&page=tambahternak"><i class="fas fa-plus"></i> Jual Ternak</a></h3>
                    </div>
                  </div>
                  
                  <div class="row">
                    <?php 
                      $produk = mysqli_query($koneksi, "SELECT * FROM ternak JOIN pelanggan ON ternak.id_user=pelanggan.id_user WHERE ternak.id_user='$data[id_user]' "); ?>
                    <?php while ($perproduk=$produk->fetch_assoc()) { ?>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="padding-bottom:15px; ; margin-top: 7px;">
                        <div class="card bg-white border">
                          <div class="kontainer bg-white rounded">
                            
                              <div class="card-body line" style="text-align:center; overflow:hidden; padding:0;">
                                <img class="image img-fluid mx-auto" alt="responsive image" style="height:150px; width:100% ;" src="foto_produk/<?php echo $perproduk['foto'];?>"> 
                                <div class="middle">
                                  <a class="text-success" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>" title="Lihat"><i class="fas fa-eye fa-lg"></i></a>
                                  <a class="ml-2 mr-2" href="index.php?halaman=profil&page=editproduk&id<?php echo $perproduk['kd_ternak'];?>" title="Edit"><i class="fas fa-edit fa-lg"></i></a>
                                  <a class="text-danger" href="index.php?halaman=detail&id=<?php echo $perproduk['kd_ternak'];?>" title="Hapus"><i class="fas fa-trash-alt fa-lg"></i></a>
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

                <div id="menu1" class="container tab-pane fade"><br>
                  <h3>Penjualan</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                  <h3>Pembelian</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>

