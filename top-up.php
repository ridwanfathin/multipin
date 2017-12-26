<?php include 'header-logged.php'; ?>
    <div class="main-wrap">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-sm-8">
                     <div class="col-sm-12">
                        <div class="support-shipping">
                            <div class="support-shipping-icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="support-shipping-content">
                                <h5>Nama : Airin</h5>
                                <h5>Saldo : 56000</h5>
                                <a href="history.php" type="button" class="btn btn-default">Riwayat Transaksi</a>
                            </div>
                        </div>
                    </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="new">
                                <h1>Pilih Channel Pembayaran:</h1>
                                <br>
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/1.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" id="toChannel"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img  src="img/channel/2.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/3.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/4.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/5.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/6.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#failModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/7.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#failModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/8.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#failModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product col-sm-2 col-sm-6 new custom bordered">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/channel/9.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <a href="#" data-toggle="modal" data-target="#failModal"><i class="fa fa-eye"></i><span class="tooltip">Top Up</span></a>
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
    <br><br><br><br><br><br><br><br><br><br>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Isi Saldo Berhasil</h4>
          </div>
          <div class="modal-body">
            <p> Saldo Anda telah di top-Up sejumlah RP. 50,000.<br>
            Saldo Anda saat ini adalah Rp. 106,000.</p>
          </div>

          <div class="modal-footer">
            <a href="home-topup.php" type="button" class="btn btn-default" >Kembali ke Beranda</a>
          </div>
        </div>

      </div>
    </div>
    <div id="failModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Isi Saldo Gagal</h4>
          </div>
          <div class="modal-body">
            <p> Terjadi kesalahan, silahkan coba lagi nanti.</p>
          </div>

          <div class="modal-footer">
            <a href="top-up.php" type="button" class="btn btn-default" >Kembali</a>
          </div>
        </div>

      </div>
    </div>
  
    <?php include 'footer.php'; ?>
     
    <a id="toTop" class="toTop" href="index.php#header"><i class="fa fa-angle-up"></i></a>
     <script>
        (function() {
          document.getElementById("toChannel").onclick = function() {
            window.open('https://klikpay.klikbca.com/', 'newwindow', 'width=700,height=500');
            setTimeout(function() {
                $("#myModal").modal('show');
            }, 5000);
            return false;
          };
        })();
     </script>
    
    <!--------------- Javascript external files -------------->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
   <script src="js/map.js"></script>
   <script src="js/custom.js"></script>

</body>
</html>